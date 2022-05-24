@extends('layouts.app')
@section('content')
<script src="{{asset('js/productos.js')}}"></script>
<center><h3 class="bg-dark-write">Editar Productos</h3></center>
<form action="{{route('productos.update',$productos->pro_id)}}" method="POST" onsubmit="return validar()">
	
	@csrf

	<div class="container">
	    <div class="row">
	
<div class="col-md-6">
	<label for="">NOMBRE DEL PRODUCTO</label>
	<input type="text" class="form-control" value="{{$productos->pro_nombre}}" name="pro_nombre" id="pro_nombre">
</div>

<div class="col-md-6">
	<label for="">CATEGORIA</label>
	<input type="text" class="form-control" value="{{$productos->pro_categoria}}" name="pro_categoria" id="pro_categoria">
</div>

<div class="col-md-6">
	<label for="">PRECIO</label>
	<input type="text" class="form-control" value="{{$productos->pro_precio}}" name="pro_precio" id="pro_precio">
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
<center><button class="btn btn-success">GUARDAR</button></center>
	
</div>
</form>
</div>
</div>
@endsection
