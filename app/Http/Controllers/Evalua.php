<?php

namespace App\Http\Controllers;

use App\Models\Resultados;
use Illuminate\Http\Request;

class Evalua extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $res = Resultados::all();
        return view('alumno/calificaciones.index')->with('res',$res);
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno/calificaciones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Resultados();
        $res->control = $request ->get('control');
        $res->nombre = $request ->get('nombre');
        $res->literatura = $request ->get('literatura');
        $res->mates = $request ->get('mates');
        $res->ciencias = $request ->get('ciencias');
        $res->pfinal = $request ->get('pfinal');

        $res->save();

        return redirect('/dashboard');
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
    }
}
