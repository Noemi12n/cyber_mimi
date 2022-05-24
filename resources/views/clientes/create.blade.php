@extends('layouts.app')
@section('content')
<script src="{{asset('js/clientes.js')}}"></script>
<center><h4 class="bg-dark-write">Formulario de Clientes</h4></center>
<form action="{{route('clientes.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	

	
	<div class="container">
	    <div class="row">
              <div class="col-md-6">
	              <label for="">NOMBRE</label>
	              <input type="text" class='form-control' id='cli_nombre'name="cli_nombre">
	          </div>

	           <div class="col-md-6">
	              <label for="">APELLIDO</label>
	              <input type="text" class='form-control' id='cli_apellido'name="cli_apellido">
	          </div>

	           <div class="col-md-6">
	              <label for="">CÉDULA</label>
	              <input type="number" class='form-control' id='cli_cedula'name="cli_cedula">
	          </div>

	           <div class="col-md-6">
	              <label for="">TELEFONO</label>
	              <input type="number" class='form-control' id='cli_telefono'name="cli_telefono">
	          </div>

	           <div class="col-md-6">
	              <label for="">DIRECCION</label>
	              <input type="text" class='form-control' id='cli_direccion'name="cli_direccion">
	          </div>

	           <div class="col-md-6">
	              <label for="">CORREO ELECTRÓNICO</label>
	              <input type="email" class='form-control' id='email'name="email">
	          </div>
                 <div class="col-md-12 mt-3">
	          <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                </div>
	        </div>
	    </div>
</form> 
@endsection 












