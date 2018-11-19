<?php

namespace App\Http\Controllers;

use App\Musica;
use App\Estilo;
use \Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class musicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMusicas = Musica::with('estilos')->get();
        return view('musicas.list',['musicas'=> $listaMusicas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
                return view ('musicas.create');   
                    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'title.required' => 'É obrigatório um título para a música',
            'banda.required' => 'É obrigatório uma banda para a música'
        );
        //vetor com as especificações de validações
        $regras = array(
            'title' => 'required|string|max:255',
            'banda' => 'required',
        );
        //cria o objeto com as regras de validação
        $validador = Validator::make($request->all(), $regras, $messages);

        //executa as validações
        if ($validador->fails()) {
            return redirect('musicas/create')
            ->withErrors($validador)
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        $obj_Mensagem = new Musica();
        $obj_Mensagem->nome =       $request['title'];
        $obj_Mensagem->banda =       $request['banda'];
        $obj_Mensagem->duracao = $request['dura'];

        $obj_Mensagem->save();

        return redirect('/musicas')->with('success', 'Música criada com sucesso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function show(Musica $musica)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function edit(Musica $musica)
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
    public function update(Request $request, Musica $musica)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estilo  $estilo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Musica $musica)
    {
        //
    }
}
