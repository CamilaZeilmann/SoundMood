<?php

namespace App\Http\Controllers;

use App\Musica;
use App\Estilo;
use Illuminate\Http\Request;

class estiloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaEstilos = Estilo::with('musicas')->get();
        return view('estilos.list',['estilos'=> $listaEstilos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                return view ('estilos.create');   

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function show(Estilo $estilo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function edit(Estilo $estilo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estilo $estilo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estilo $estilo)
    {
        //
    }
}
