<?php

/**
 * Script para reemplazar Html:: y Form:: de laravelcollective
 * por HTML puro compatible con Laravel 11
 * 
 * USO: php fix_views.php
 * Correrlo desde la carpeta raíz del proyecto Laravel 11
 */

$viewsPath = __DIR__ . '/resources/views';

if (!is_dir($viewsPath)) {
    die("ERROR: No se encontró la carpeta resources/views en " . __DIR__ . "\n");
}

$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($viewsPath)
);

$totalFiles = 0;
$modifiedFiles = 0;

foreach ($files as $file) {
    if ($file->getExtension() !== 'php') continue;
    
    $content = file_get_contents($file->getPathname());
    $original = $content;
    $totalFiles++;

    // =============================================
    // FORM:: reemplazos
    // =============================================

    // Form::open
    $content = preg_replace(
        '/\{!!\s*Form::open\s*\(\s*\[\s*\'url\'\s*=>\s*([^,\]]+)\s*,\s*\'method\'\s*=>\s*\'([^\']+)\'[^\]]*\]\s*\)\s*!!\}/',
        '<form action="{{ url($1) }}" method="$2">',
        $content
    );
    $content = preg_replace(
        '/\{!!\s*Form::open\s*\(\s*\[\s*\'url\'\s*=>\s*([^,\]]+)[^\]]*\]\s*\)\s*!!\}/',
        '<form action="{{ url($1) }}" method="POST">{{ csrf_field() }}',
        $content
    );
    $content = preg_replace(
        '/\{!!\s*Form::open\s*\(\s*\[\s*\'route\'\s*=>\s*([^,\]]+)[^\]]*\]\s*\)\s*!!\}/',
        '<form action="{{ route($1) }}" method="POST">{{ csrf_field() }}',
        $content
    );
    // Form::open genérico
    $content = preg_replace(
        '/\{!!\s*Form::open\s*\([^)]*\)\s*!!\}/',
        '<form method="POST">{{ csrf_field() }}',
        $content
    );

    // Form::close
    $content = preg_replace(
        '/\{!!\s*Form::close\s*\(\s*\)\s*!!\}/',
        '</form>',
        $content
    );

    // Form::token / csrf
    $content = preg_replace(
        '/\{!!\s*Form::token\s*\(\s*\)\s*!!\}/',
        '{{ csrf_field() }}',
        $content
    );

    // Form::label
    $content = preg_replace(
        '/\{!!\s*Form::label\s*\(\s*\'([^\']+)\'\s*,\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<label for="$1">$2</label>',
        $content
    );

    // Form::text
    $content = preg_replace(
        '/\{!!\s*Form::text\s*\(\s*\'([^\']+)\'\s*,\s*([^,)]+)\s*,\s*\[([^\]]*)\]\s*\)\s*!!\}/',
        '<input type="text" name="$1" value="{{ old(\'$1\', $2) }}" $3>',
        $content
    );
    $content = preg_replace(
        '/\{!!\s*Form::text\s*\(\s*\'([^\']+)\'\s*,\s*([^,)]+)\s*\)\s*!!\}/',
        '<input type="text" name="$1" value="{{ old(\'$1\', $2) }}">',
        $content
    );
    $content = preg_replace(
        '/\{!!\s*Form::text\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<input type="text" name="$1" value="{{ old(\'$1\') }}">',
        $content
    );

    // Form::email
    $content = preg_replace(
        '/\{!!\s*Form::email\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<input type="email" name="$1" value="{{ old(\'$1\') }}">',
        $content
    );

    // Form::password
    $content = preg_replace(
        '/\{!!\s*Form::password\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<input type="password" name="$1">',
        $content
    );

    // Form::hidden
    $content = preg_replace(
        '/\{!!\s*Form::hidden\s*\(\s*\'([^\']+)\'\s*,\s*([^)]+)\)\s*!!\}/',
        '<input type="hidden" name="$1" value="{{ $2 }}">',
        $content
    );

    // Form::submit
    $content = preg_replace(
        '/\{!!\s*Form::submit\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<button type="submit">$1</button>',
        $content
    );

    // Form::button
    $content = preg_replace(
        '/\{!!\s*Form::button\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<button type="button">$1</button>',
        $content
    );

    // Form::textarea
    $content = preg_replace(
        '/\{!!\s*Form::textarea\s*\(\s*\'([^\']+)\'\s*,\s*([^,)]+)[^)]*\)\s*!!\}/',
        '<textarea name="$1">{{ old(\'$1\', $2) }}</textarea>',
        $content
    );
    $content = preg_replace(
        '/\{!!\s*Form::textarea\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<textarea name="$1">{{ old(\'$1\') }}</textarea>',
        $content
    );

    // Form::select
    $content = preg_replace(
        '/\{!!\s*Form::select\s*\(\s*\'([^\']+)\'\s*,\s*\$([^,)]+)[^)]*\)\s*!!\}/',
        '<select name="$1">@foreach(\$$2 as $key => $value)<option value="{{ $key }}">{{ $value }}</option>@endforeach</select>',
        $content
    );

    // Form::checkbox
    $content = preg_replace(
        '/\{!!\s*Form::checkbox\s*\(\s*\'([^\']+)\'\s*,\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<input type="checkbox" name="$1" value="$2">',
        $content
    );

    // Form::radio
    $content = preg_replace(
        '/\{!!\s*Form::radio\s*\(\s*\'([^\']+)\'\s*,\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<input type="radio" name="$1" value="$2">',
        $content
    );

    // =============================================
    // HTML:: reemplazos
    // =============================================

    // Html::style
    $content = preg_replace(
        '/\{!!\s*Html::style\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<link rel="stylesheet" href="{{ asset(\'$1\') }}">',
        $content
    );

    // Html::script
    $content = preg_replace(
        '/\{!!\s*Html::script\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<script src="{{ asset(\'$1\') }}"></script>',
        $content
    );

    // Html::image
    $content = preg_replace(
        '/\{!!\s*Html::image\s*\(\s*\'([^\']+)\'\s*,\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<img src="{{ asset(\'$1\') }}" alt="$2">',
        $content
    );
    $content = preg_replace(
        '/\{!!\s*Html::image\s*\(\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<img src="{{ asset(\'$1\') }}">',
        $content
    );

    // Html::link
    $content = preg_replace(
        '/\{!!\s*Html::link\s*\(\s*\'([^\']+)\'\s*,\s*\'([^\']+)\'[^)]*\)\s*!!\}/',
        '<a href="{{ url(\'$1\') }}">$2</a>',
        $content
    );

    // Html::decode
    $content = preg_replace(
        '/\{!!\s*Html::decode\s*\(([^)]+)\)\s*!!\}/',
        '{!! $1 !!}',
        $content
    );

    // Si quedó algún Html:: o Form:: sin reemplazar, lo marcamos con un comentario
    $content = preg_replace(
        '/(\{!!\s*Form::[^!]+!!\})/',
        '{{-- TODO: reemplazar manualmente: $1 --}}',
        $content
    );
    $content = preg_replace(
        '/(\{!!\s*Html::[^!]+!!\})/',
        '{{-- TODO: reemplazar manualmente: $1 --}}',
        $content
    );

    if ($content !== $original) {
        file_put_contents($file->getPathname(), $content);
        $modifiedFiles++;
        echo "✓ Modificado: " . $file->getPathname() . "\n";
    }
}

echo "\n==========================================\n";
echo "Total archivos revisados: $totalFiles\n";
echo "Archivos modificados: $modifiedFiles\n";
echo "\nBuscá '{{-- TODO:' en tus vistas para ver si quedó algo sin reemplazar.\n";
