<?php

namespace App\Http\Controllers;

use App\Musica;
use App\Estilo;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

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
         //faço as validações dos campos
        //vetor com as mensagens de erro
        $messages = array(
            'title.required' => 'É obrigatório um título para a mensagem'
        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string|max:255'
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('estilos/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Mensagem = new Estilo();
        $obj_Mensagem->nome =       $request['title'];
        $obj_Mensagem->save();

        return redirect('/estilos')->with('success', 'Mensagem criada com sucesso!!');
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
