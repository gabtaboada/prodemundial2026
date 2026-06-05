@extends('layouts.admin')

@section('content')
	@include('admin.alerts.errors')
	@include('admin.alerts.success')
	@include('admin.master.Modal.ModalMasterUpdate')
	@include('admin.master.Modal.ModalMasterEliminar')
	@include('admin.master.forms.Partidos')

@endsection

@section('scripts')
	<script src="{{ asset('js/scriptEditarMaster.js') }}"></script>
@endsection
