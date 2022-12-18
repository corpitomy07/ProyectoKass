<?php

namespace App\Http\Controllers;

use App\Models\Vendedor;
use Illuminate\Http\Request;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['vendedors']=Vendedor::paginate(5);
        return view('vendedor.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('vendedor.create'); 

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
        //$datosVendedor = request()->all();


        $datosVendedor = request()->except('_token');
        Vendedor::insert($datosVendedor);

        //return response()->json($datosVendedor);
        return redirect('vendedor')->with('mensaje','Empleado agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendedor $vendedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $vendedor=Vendedor::findOrFail($id);
        return view('vendedor.edit', compact('vendedor')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosVendedor = request()->except(['_token' , '_method']);
        Vendedor::where('id','=', $id)->update($datosVendedor);

        $vendedor=Vendedor::findOrFail($id);
        return view('vendedor.edit', compact('vendedor')); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vendedor  $vendedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Vendedor::destroy($id);
        return redirect('vendedor')->with('mensaje','Empleado borrado');
    }
}

