@extends('layouts.app')
@section('content')

<center><h1>REPORTE MENSUAL</h1>
   <form action="{{route('reporte.search')}}" method="POST">


         @csrf
         Desde:<input type="date" name="desde" value="{{$desde}}"> 
         Hasta:<input type="date" name="hasta" value="{{$hasta}}">
         <button class="btn btn-success"  type="submit" name="btn_buscar">Buscar</button>
         <button class="btn btn-danger"  type="submit" value ="0" name="btn_pdf">PDF</button>
      </form>
<div class="container">
   <table class="table">
      <tr>
         <th>#</th>
         <th>Factura</th>
         <th>Fecha</th>
         <th>Clientes</th>
         <th>Acciones</th>
      </tr>
      
         
       


   </table>
   </center>
</div>

@endsection


