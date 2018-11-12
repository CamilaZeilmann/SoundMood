@extends('layouts.app')



<h1>Lista de Estilos</h1>
<hr>
@foreach($estilos as $estilo)
	<h3>{{$estilo->nome}}</h3>
	@foreach($estilo->musicas as $m)
		<p>{{$m->nome}}</p>
	@endforeach

@endforeach