@extends('layouts.app')
@section('content')
<script src="{{asset('js/clientes.js')}}"></script>
<center><h1>Editar Clientes</h1></center>
<form action="{{route('clientes.update',$clientes->cli_id)}}" method="POST" onsubmit="return validar()">
	
	@csrf
	
	
	
	<div class="container">
	    <div class="row">
              <div class="col-md-6">
	              <label for="">NOMBRE</label>
	              <input type="text" class='form-control' value="{{$clientes->cli_nombre}}" id='cli_nombre'name="cli_nombre">
	          </div>

	           <div class="col-md-6">
	              <label for="">APELLIDO</label>
	              <input type="text" class='form-control'value="{{$clientes->cli_apellido}}" id='cli_apellido'name="cli_apellido">
	          </div>

	           <div class="col-md-6">
	              <label for="">CÉDULA</label>
	              <input type="number" class='form-control' value="{{$clientes->cli_cedula}}" id='cli_cedula'name="cli_cedula">
	          </div>

	           <div class="col-md-6">
	              <label for="">TELEFONO</label>
	              <input type="number" class='form-control' value="{{$clientes->clic_telefono}}"  id='cli_telefono'name="cli_telefono">
	          </div>

	           <div class="col-md-6">
	              <label for="">DIRECCION</label>
	              <input type="text" class='form-control' value="{{$clientes->cli_direccion}}" id='cli_direccion'name="cli_direccion">
	          </div>

	           <div class="col-md-6">
	              <label for="">CORREO ELECTRÓNICO</label>
	              <input type="email" class='form-control' value="{{$clientes->email}}" id='email'name="email">
	          </div>
                 <div class="col-md-12 mt-3">
	          <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                </div>
	        </div>
	    </div>
</form> 
@endsection 

