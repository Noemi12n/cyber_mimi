@extends('layouts.app')
@section('content')

<center><h3 class="bg-dark-write">Editar usuarios</h3></center>
<form action="{{route('usuarios.update',$user->usu_id)}}" method="POST">
	
	@csrf
	<div class="container">
		<div class="row">	
	<div class="col-md-6">
	<label for="">NOMBRE</label>
	<input type="text"  class='form-control' value="{{$user->usu_nombre}}" name="usu_nombre" id="usu_nombre">
</div>

<div class="col-md-6">
	<label for="">APELLIDO</label>
	<input type="text"  class='form-control' value="{{$user->usu_apellido}}" name="usu_apellido" id="usu_apellido">
</div>

<div class="col-md-6">
	<label for="">CEDULA</label>
	<input type="number"  class='form-control' value="{{$user->usu_cedula}}" name="usu_cedula" id="usu_cedula">
</div>

<div class="col-md-6">
	<label for="">DIRECCION</label>
	<input type="text"  class='form-control' value="{{$user->usu_direccion}}" name="usu_direccion" id="usu_direccion">
</div>

<div class="col-md-6">
	<label for="">CORREO</label>
	<input type="email"  class='form-control'  value="{{$user->email}}" name="email" id="email">
</div>
<div class="col-md-12 mt-3">
	 <center><button class="btn btn-success">GUARDAR</button></center>
		</div>
	</div>
	</div>
</form>


@endsection