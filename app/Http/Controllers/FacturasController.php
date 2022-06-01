<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturas;
use App\Detalles;
use DB;
use PDF;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facturas=DB::select("SELECT * FROM facturas f JOIN clientes c ON f.cli_id=c.cli_id");
        return view('facturas.index')
        ->with('facturas',$facturas)

        ;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
       $clientes=DB::select("SELECT * from clientes");
        $productos=DB::select("SELECT * from productos");
        return view('facturas.create')
        ->with('clientes',$clientes)
        ->with('productos',$productos)
        ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        $factura=Facturas::create($data);
        return redirect(route('facturas.edit',$factura->fac_id));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $facturas=Facturas::find($id);
        $clientes=DB::select("SELECT * from clientes");
        $productos=DB::select("SELECT * from productos");
        $detalles=DB::select("SELECT * FROM facturas_detalles fd 
                             JOIN productos p ON fd.pro_id=p.pro_id  
                             WHERE fd.fac_id=$id");
        return view('facturas.edit')
        ->with('facturas',$facturas)
        ->with('clientes',$clientes)
        ->with('productos',$productos)
        ->with('detalles',$detalles)
        ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           Facturas::destroy($id);
        return redirect(route('facturas'));
    }
    public function detalles(Request $req){
         $datos=$req->all();
         $fac_id=$datos['fac_id'];
         
         if(isset($datos['btn_detalle'])=='btn_detalle'){
                ///GUARDO EL DETALLE 
           Detalles::create($datos);
         }
         if(isset($datos['btn_eliminar'])>0){
                ///ELIMINO EL DETALLE    
                $fad_id=$datos['btn_eliminar'];
                Detalles::destroy($fad_id);    

         }
       return redirect(route('facturas.edit',$fac_id));
    }

    public function facturas_pdf($fac_id){
        
        $facturas=DB::select("
            SELECT * FROM facturas f
            JOIN clientes c ON c.cli_id=f.cli_id
            WHERE f.fac_id=$fac_id ");

        $detalles=DB::select("SELECT * FROM facturas_detalles d 
                   JOIN productos p ON p.pro_id=d.pro_id
                   WHERE d.fac_id=$fac_id 
            ");

        $pdf = PDF::loadView('facturas.pdf',[ 'facturas'=>$facturas[0],'detalles'=>$detalles ]);
        return $pdf->stream('facturas.pdf');


    }


}


