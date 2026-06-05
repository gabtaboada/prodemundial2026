<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UsuariosFrontController;
use App\Http\Controllers\LogUsuarioController;
use App\Http\Controllers\BoletaController;
use App\Http\Controllers\PosicionesController;
use App\Http\Controllers\PartiFrontController;
use App\Http\Controllers\DreamTeamController;
use App\Http\Controllers\GflowController;
use App\Http\Controllers\FutbolomuerteController;
use App\Http\Controllers\IntocablesController;
use App\Http\Controllers\MostrarApuPartController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogUserController;
use App\Http\Controllers\ParticipantesController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\ApuestasController;
use App\Http\Controllers\GrupoAmigosController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordController;

/*
|--------------------------------------------------------------------------
| FRONT
|--------------------------------------------------------------------------
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('inicio', [FrontController::class, 'index']);
Route::get('resultados', [FrontController::class, 'resultados']);
Route::get('pronosticos', [FrontController::class, 'pronosticos']);
Route::get('IngresarUsuario', [FrontController::class, 'IngresarUsuario']);

// Recuperación de password (participantes)
Route::get('RecuperacionPassword', [PasswordController::class, 'getEmail']);
Route::post('RecuperacionPassword', [PasswordController::class, 'postEmail']);
Route::get('ResetPassword/{token}/{type}', [PasswordController::class, 'getReset']);
Route::post('ResetPassword/{type}', [PasswordController::class, 'postReset']);

// Recursos front
Route::resource('usuarios', UsuariosFrontController::class);
Route::resource('loginUsuario', LogUsuarioController::class);
Route::resource('boleta', BoletaController::class);
Route::resource('posiciones', PosicionesController::class);
Route::resource('participantes', PartiFrontController::class);
Route::resource('DreamTeam', DreamTeamController::class);
Route::resource('Gflow', GflowController::class);
Route::resource('Futbolomuerte', FutbolomuerteController::class);
Route::resource('Intocables', IntocablesController::class);

// Rutas específicas front
Route::get('logoutUsuario', [LogUsuarioController::class, 'logoutUsuario']);
Route::get('apuestaPartido/{Grupo}/{Partido}', [MostrarApuPartController::class, 'apuestaPartido']);
Route::get('boleta/ObtengoDatosApuesta/{Grupo}/{Partido}', [BoletaController::class, 'ObtengoDatosApuesta']);
Route::get('Verboleta/{id}', [BoletaController::class, 'VerBoletaParticipante']);
Route::post('boleta/confirmarActualizarApuesta', [BoletaController::class, 'confirmarActualizarApuesta']);
Route::post('boleta/guardarParcial', [BoletaController::class, 'guardarParcial']);
Route::get('admin/Superadmin/backUp', [SuperAdminController::class, 'backup']);
Route::get('superadmin/descargarBackUp', function() {
    return redirect('backup.php');
});

/*
|--------------------------------------------------------------------------
| ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/admin/inicio', [AdminController::class, 'inicio']);
Route::resource('login', LogUserController::class);
Route::get('logout', [LogUserController::class, 'logout']);

// Participantes admin
Route::get('admin/participantes/VerBoleta/{id}', [ParticipantesController::class, 'VerBoleta']);
Route::get('admin/participantes/VerBoleta/DatosApuesta/{IdApuesta}/{Grupo}/{Numero}/{Partido}', [ParticipantesController::class, 'DatosApuesta']);
Route::post('admin/participantes/VerBoleta/confirmarEditar', [ParticipantesController::class, 'ConfirmarEditarApuesta']);
Route::get('admin/participantes/ObtengoPago/{id}', [ParticipantesController::class, 'ObtengoPago']);
Route::post('admin/participantes/confirmarActualizarPago', [ParticipantesController::class, 'confirmarActualizarPago']);
Route::get('admin/participantes/ObtengoGrupos/{id}', [ParticipantesController::class, 'ObtengoGrupos']);

// Master admin
Route::get('admin/master/ObtengoDatosMaster/{IdApuesta}/{Grupo}/{Numero}/{Partido}', [MasterController::class, 'ObtengoDatosMaster']);
Route::post('admin/master/confirmarActualizarMaster', [MasterController::class, 'confirmarActualizarMaster']);
Route::post('admin/master/confirmarEliminarMaster', [MasterController::class, 'confirmarEliminarMaster']);
Route::get('admin/master/actualizarAciertos', [MasterController::class, 'ActualizarAciertos']);
Route::post('admin/master/actualizarAciertos/confirmarActualizarAciertos', [MasterController::class, 'confirmarActualizarAciertos']);

// Flags admin
Route::get('admin/HabilitarDeshabilitar/carga', [FlagController::class, 'HabilitarDeshabilitar']);
Route::post('admin/HabilitarDeshabilitar/carga/confirmarHabDeshabCarga', [FlagController::class, 'confirmarHabDeshabCarga']);

// Apuestas admin
Route::get('admin/apuestas/cargarBoleta/{id}', [ApuestasController::class, 'cargarBoleta']);

// Recursos admin
Route::resource('admin/participantes', ParticipantesController::class);
Route::resource('admin/GrupoAmigos', GrupoAmigosController::class);
Route::resource('admin/usuarios', UserController::class);
Route::resource('admin/apuestas', ApuestasController::class);
Route::resource('admin/master', MasterController::class);
Route::resource('admin/HabilitarDeshabilitar', FlagController::class);

// Auth
Route::get('auth/login', [AuthController::class, 'getLogin']);
Route::post('auth/login', [AuthController::class, 'postLogin']);
Route::get('auth/logout', [AuthController::class, 'getLogout']);
Route::get('auth/register', [AuthController::class, 'getRegister']);
Route::post('auth/register', [AuthController::class, 'postRegister']);

// Alias requerido por Laravel para el reset de password
Route::get('ResetPassword/{token}/{type}', [App\Http\Controllers\Auth\PasswordController::class, 'getReset'])->name('password.reset');
