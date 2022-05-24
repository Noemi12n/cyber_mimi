@extends('layouts.app')
@section('content')
<script src="{{asset('js/productos.js')}}"></script>
<center><h4 class="bg-dark-write">Formulario de Productos</h4></center>
<form action="{{route('productos.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	
	<div class="container">
	    <div class="row">
              <div class="col-md-6">
	              <label for="">NOMBRE DEL PRODUCTO</label>
	              <input type="text" class='form-control' id='pro_nombre'name="pro_nombre">
	          </div>

	           <div class="col-md-6">
	              <label for="">CATEGORIA</label>
	              <input type="text" class='form-control' id='pro_categoria'name="pro_categoria">
	          </div>

	           <div class="col-md-6">
	              <label for="">PRECIO</label>
	              <input type="text" class='form-control' id='pro_precio'name="pro_precio">
	          </div>

                 <div class="col-md-6">
                 	<label for="">PROVEEDOR</label>
                 	<select name="prov_id" id="prov_id" class="form-control">
                 		<option value="">Elija una opción</option>
		                 
		                 @foreach($proveedores as $p)

		                     <option  value="{{$p->prov_id}}" >{{$p->prov_nombre}}</option>
		                 @endforeach
	                </select>
	              
	          </div>



                

                 <div class="col-md-12 mt-3">
	          <center><button type="submit" class="btn btn-success">GUARDAR</button></center>

                </div>
	       
	    </div>
</form> 
@endsection 








