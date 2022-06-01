<script src="{{asset('js/facturas.js')}}"></script>
<script src="{{asset('js/facturas_detalles.js')}}"></script>
<?php 
if(isset($facturas)){
     $fac_id=$facturas->fac_id;
     $cli_id=$facturas->cli_id;
     $fac_no=$facturas->fac_no;
     $fac_fecha=$facturas->fac_fecha;
     $fac_descuento=$facturas->fac_descuento;
     $fac_iva=$facturas->fac_iva;
     $fac_total=$facturas->fac_total;
     $fac_tipo_pago=$facturas->fac_tipo_pago;
     $fac_observaciones=$facturas->fac_observaciones;

}else{

     $fac_id="";
     $cli_id="";
     $fac_no="";
     $fac_fecha=date('Y-m-d');
     $fac_descuento=0;
     $fac_iva=0;
     $fac_total=0;
     $fac_tipo_pago="EFECTIVO";
     $fac_observaciones="";
}
?>
<form action="{{route('facturas.store')}}" method="POST" onsubmit="return validar()">
	@csrf
	<div class="row">
		<div class="col-md-3">
			<label for="cli_id">Cliente</label>
			<select name="cli_id" id="cli_id" required class="form-control">
				<option value="">--Ejila Un cliente--</option>
				@foreach($clientes as $c)
				     @if($c->cli_id==$cli_id)
				        <option selected value="{{$c->cli_id}}">{{$c->cli_nombre}}</option>
				     @else
				        <option value="{{$c->cli_id}}">{{$c->cli_nombre}}</option>
				     @endif
				@endforeach
			</select>
		</div>
		<div class="col-md-3">
			<label for="fac_no">Numero de Factura</label>
			<input type="number" id="fac_no" value="{{$fac_no}}" name="fac_no" required class="form-control">
		</div>
		<div class="col-md-3">
			<label for="fac_fecha">Fecha</label>
			<input type="date" id="fac_fecha" value="{{$fac_fecha}}" required name="fac_fecha" class="form-control">
		</div>
		<div class="col-md-3">
			<label for="fac_descuento">Descuento</label>
			<input type="text" id="fac_descuento" value="{{$fac_descuento}}" name="fac_descuento" required class="form-control">
		</div>
</div>
<div class="row">
		<div class="col-md-3">
			<label for="fac_iva">IVA</label>
			<input type="text" id="fac_iva" value="{{$fac_iva}}" readonly name="fac_iva" class="form-control">
		</div>
		<div class="col-md-3">
			<label for="fac_total">Total</label>
			<input type="text" id="fac_total" value="{{$fac_total}}" readonly name="fac_total" class="form-control">
		</div>
		<div class="col-md-3">
			<label for="fac_tipo_pago">Tipo Pago</label>
          <select name="fac_tipo_pago" id="fac_tipo_pago" class="form-control">
          	<option value="EFECTIVO">EFECTIVO</option>
          	<option value="TRANSFERENCIA">TRANSFERENCIA</option>
          	<option value="TARJETA">TARJETA</option>
          </select>
		</div>
		<div class="col-md-3">
			<label for="fac_observaciones">Observaciones</label>
			<input type="text" id="fac_observaciones" value="{{$fac_observaciones}}" name="fac_observaciones" class="form-control">
		</div>
	</div>
   <div class="row mt-3">
		<div class="col-md-3">
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>
   </div>
</form>

<form action="{{route('facturas.detalles')}}" method="POST" onsubmit="return validar()">
	@csrf
	<table class="table">
		<tr>
			<th colspan="6" class="bg-primary text-white text-center">DETALLE DE LA FACTURA</th>
		</tr>
		<tr>
			<th>#</th>
			<th>Cantidad</th>
			<th>Producto</th>
			<th>Vu</th>
			<th>Vt</th>
			<th>Ac</th>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="hidden" id="fac_id" name="fac_id" value="{{$fac_id}}" />
				<input type="number" name="fad_cantidad" id="fad_cantidad" class="form-control">

			</td>
			<td>
				<select name="pro_id" id="pro_id" style="width:400px" class="form-control" >
					<option value="">--Elija un producto--</option>
					@foreach($productos as $p)
					   <option value="{{$p->pro_id}}">{{$p->pro_nombre}}</option>
					@endforeach
				</select>
			</td>
			<td>
				<input type="number" id="fad_vu" name="fad_vu" class="form-control">
			</td>
			<td>
				<input type="text" id="fad_vt" name="fad_vt" readonly class="form-control">
			</td>
			<td>
				<button class="btn btn-success" name="btn_detalle" value="btn_detalle" >+</button>
			</td>
		</tr>
	   @isset($detalles)
	   <?php 
	      $subt=0;
	   ?>
	         @foreach($detalles as $dt)
	         <?php $subt+=$dt->fad_vt;?>
	            <tr>
	            	<td>{{$loop->iteration}}</td>
	            	<td>{{$dt->fad_cantidad}}</td>
	            	<td>{{$dt->pro_nombre}}</td>
	            	<td class="text-right">{{number_format($dt->fad_vu,2)}}$</td>
	            	<td class="text-right">{{number_format($dt->fad_vt,2)}}$</td>
	            	<td>
	            		<button class="btn btn-danger btn-sm" name="btn_eliminar" value="{{$dt->fad_id}}" >Del</button>
	            	</td>
	            </tr>
	         @endforeach
	         <?php 
	            $vt=($subt-$fac_descuento)+$fac_iva;
	         ?>
	         <tr>
	         	    <td colspan="4" class="text-right">Subt:</td>
	         	    <td class="text-right">{{number_format($subt,2)}}$</td>
	         </tr>
	         <tr>
	         	    <td colspan="4" class="text-right">Desc:</td>
	         	    <td class="text-right">{{number_format($fac_descuento,2)}}$</td>
	         </tr>
	         <tr>
	         	    <td colspan="4" class="text-right">IVA:</td>
	         	    <td class="text-right">{{number_format($fac_iva,2)}}$</td>
	         </tr>
	         <tr>
	         	    <td colspan="4" class="text-right">VT:</td>
	         	    <td class="text-right">{{number_format($vt,2)}}$</td>
	         </tr>
        @else
        <tr><th colspan="5" class="alert alert-warning">No existen datos</th></tr>
        @endisset

	</table>
	<a class="btn btn-dark" href="{{route('facturas.index')}}">Guardar facturas</a>
</form>
<script>
window.onload = function(){
      const obj_cant=document.querySelector("#fad_cantidad");
      const obj_vu=document.querySelector("#fad_vu");
      obj_cant.addEventListener("change",()=>{
      	calculos();
      });
      obj_vu.addEventListener("change",()=>{
      	calculos();
      });

}

const calculos=()=>{
      	const vc=document.querySelector("#fad_cantidad");
      	const vu=document.querySelector("#fad_vu");
      	const vt=vc.value*vu.value;
      	document.querySelector("#fad_vt").value=vt;

}

</script>
