<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Musica;
use App\Estilo;
use \Illuminate\Support\Facades\Validator;

class estilomusicaController extends Controller
{
    public function create($id){
    	$estilos = Estilo::all();
    	$musica = Musica::where('id',$id)->with('estilos')->get()->first();
        //dd($musica);
    	return view('estilomusica.create',['estilos' => $estilos, 'musica' => $musica]);
    }

    public function store(Request $request,$id){
    	$musica = Musica::find($id);
    	$musica->estilos()->attach($request['estilo']);
    	return redirect('/musicas')->with('success', 'Estilo definido com sucesso!!');
    }
}
