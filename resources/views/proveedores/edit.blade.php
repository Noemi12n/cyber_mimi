@extends('layouts.app')
@section('content')
<script src="{{asset('js/proveedores.js')}}"></script>

<center><h1>Editar Proveedores</h1></center>
<form action="{{route('proveedores.update',$proveedores->prov_id)}}" method="POST" onsubmit="return validar()">
	

	@csrf

	
	
	<div class="container">
	    <div class="row">
              <div class="col-md-6">
	              <label for="">NOMBRE</label>
	              <input type="text" class='form-control' value="{{$proveedores->prov_nombre}}" id='prov_nombre'name="prov_nombre">
	          </div>

	           <div class="col-md-6">
	              <label for="">CORREO</label>
	              <input type="email" class='form-control' value="{{$proveedores->prov_correo}}" id='prov_correo'name="prov_correo">
	          </div>

	           <div class="col-md-6">
	              <label for="">TELEFONO</label>
	              <input type="number" class='form-control' value="{{$proveedores->prov_telefono}}" id='prov_telefono'name="prov_telefono">
	          </div>


	           <div class="col-md-6">
	              <label for="">DIRECCION</label>
	              <input type="text" class='form-control' value="{{$proveedores->prov_direccion}}" id='prov_direccion'name="prov_direccion">
	          </div>

                 <div class="col-md-12 mt-3">
	          <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                </div>
	        </div>
	    </div>
</form> 
@endsection