<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedores;
// use DB;


class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd("hola");
         $proveedores=Proveedores::all();
         return view('proveedores.index')
         ->with ('proveedores', $proveedores)
         ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $proveedores=proveedores::all();

         return view('proveedores.create')
         ->with('proveedores',$proveedores);

         // 
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        //dd($data);
        Proveedores::create($data);
        return redirect(route('proveedores'));
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
         $proveedores=Proveedores::find($id);
        return view('proveedores.edit')
        ->with('proveedores',$proveedores)
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
        $proveedores=Proveedores::find($id);
        $proveedores->update($request->all());
        return redirect(route('proveedores'));
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
        Proveedores::destroy($id);
        return redirect(route('proveedores'));
    }
}
