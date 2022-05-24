@extends('layouts.app')
@section('content')

<h1>Comenzamos la Facturación</h1>
<a href="{{route('facturas.create')}}" class="btn btn-primary"  >Nueva</a>
<div class="container">
	<table class="table">
		<tr>
			<th>#</th>
			<th>Factura</th>
			<th>Fecha</th>
			<th>Clientes</th>
			<th>Acciones</th>
		</tr>
		@foreach($facturas as $f)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{$f->fac_no}}</td>
			<td>{{$f->fac_fecha}}</td>
			<td>{{$f->cli_nombre}}</td>
			<td>
				<a class="btn btn-info btn-sm" href="{{route('facturas.edit',$f->fac_id)}}">Editar</a>
				<a class="btn btn-info btn-sm" href="{{route('facturas.destroy',$f->fac_id)}}">Eliminar</a>
				<a href="{{route('facturas.pdf',$f->fac_id)}}" class="btn btn-danger btn-sm">PDF</a>
			</td>
		</tr>
		@endforeach

	</table>
</div>

@endsection