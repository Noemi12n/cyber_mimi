@extends('layouts.app')
@section('content')
<script src="{{asset('js/proveedores.js')}}"></script>
<center><h4 class="bg-dark-write">Formulario de los Proveedores</h4></center>
<form action="{{route('proveedores.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	
	<div class="container">
	    <div class="row">
              <div class="col-md-6">
	              <label for="">NOMBRE</label>
	              <input type="text" class='form-control' id='prov_nombre'name="prov_nombre">
	          </div>

	           <div class="col-md-6">
	              <label for="">CORREO</label>
	              <input type="email" class='form-control' id='prov_correo'name="prov_correo">
	          </div>

	           <div class="col-md-6">
	              <label for="">TELEFONO</label>
	              <input type="number" class='form-control' id='prov_telefono'name="prov_telefono">
	          </div>


	           <div class="col-md-6">
	              <label for="">DIRECCION</label>
	              <input type="text" class='form-control' id='prov_direccion'name="prov_direccion">
	          </div>

                 <div class="col-md-12 mt-3">
	          <center><button type="submit" class="btn btn-success">GUARDAR</button></center>
                </div>
	        </div>
	    </div>
</form> 
@endsection 

 