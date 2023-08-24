@extends('template.layout')
@section('content')
<form id="forminsert" action="insert" method="POST">
    <div class="row">
        <div class="col-md-3">
            <label for="txtName" class="form-label">Nombre*</label>
            <input type="text" class ="form-control" name="txtName" id="txtName" required>
        </div>
        <div class="col-md-3">
            <label for="txtLastName" class="form-label">Apellido*</label>
            <input type="text" class ="form-control" name="txtLastName" id="txtLastName">
        </div>
        <div class="col-md-3">
            <label for="txtEmail" class="form-label">Correo*</label>
            <input type="text" class ="form-control" name="txtEmail" id="txtEmail">
        </div>
        <div class="col-md-3">
            <label for="txtEmail" class="form-label">Rol*</label>
            <select name="rol" id="selectRol" class="form-control">
                <option value="administrador">Administrador</option>
                <option value="usuario">Usuario</option>
            </select>
        </div>
    </div>
    @csrf
    <div class="row">
        <div class="col-md-3">
            <button class="bt-primary" type="submit"></button>
        </div>
    </div>
</form>
@endsection
@section('js')
<script src="{{asset('plugins/formvalidation/jquery.validate.js')}}"></script>
<script src="{{asset('viewreources/js/admin/insert.js')}}"></script>
@endsection
