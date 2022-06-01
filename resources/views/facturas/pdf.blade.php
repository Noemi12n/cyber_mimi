<style>
	*{
		font-family:sans-serif ;
		font-size:12px;
	}
</style>
<h3>Factura No:{{$facturas->fac_no}}</h3>
<h3>Cliente:{{$facturas->cli_nombre}}</h3>
<h3>Cedula:{{$facturas->cli_cedula}}</h3>
<h3>Direccion:Quito</h3>
<div style="background:#2BA0CC; text-align:center ;" >Detalle Factura</div>
<table style="width:85%">
	<tr>
	<th>#</th>
			<th style="text-align: left;">Producto</th>
			<th style="text-align: left;">Cantidad</th>
			<th style="text-align: left;">Valor Unitario</th>
			<th style="text-align: left;">Valor Total</th>
		
	</tr>
	<?php 
	      $subt=0;
	   ?>
	@foreach($detalles as $d)
	<?php $subt+=$d->fad_vt;?>

	<tr>
	<td>{{$loop->iteration}}</td>
	            	<td>{{$d->pro_nombre}}</td>
	            	
	            	<td>{{$d->fad_cantidad}}</td>
	            	
	            	<td class="text-right">{{number_format($d->fad_vu,2)}}$</td>
	            	<td class="text-right">{{number_format($d->fad_vt,2)}}$</td>
	</tr>
	@endforeach	
	<?php 
	            $vt=$subt;
	         ?>
	<tr>
		<td colspan="5" style="text-align:right;">Subt:{{$vt}}</td>
	</tr>
	
	
	<tr>
		<td colspan="5" style="text-align:right;">Total:{{$vt}}</td>
	</tr>
</table>