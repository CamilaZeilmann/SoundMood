@extends('layouts.app')


@section('content')
<h1>Lista de Estilos</h1>
<hr>


 <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif


@foreach($estilos as $estilo)
	<h3>{{$estilo->nome}}</h3>
	@foreach($estilo->musicas as $m)
		<p>{{$m->nome}}</p>
	@endforeach

@endforeach

@endsection