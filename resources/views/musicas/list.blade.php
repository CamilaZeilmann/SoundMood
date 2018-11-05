<h1>Lista de Musicas</h1>
<hr>
@foreach($musicas as $musica)
	<h3>{{$musica->nome}}</h3>
	<p>{{$musica->banda}}</p>
	<p>{{$musica->duracao}}</p>
	@foreach($musica->estilos as $e)
		<p>{{$e->nome}}</p>
	@endforeach

@endforeach