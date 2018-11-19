<html>
<body>

Música {{$musica->nome}}


<form method="post" action="/musicaestilo/{{$musica->id}}">
{{csrf_field() }}
<select name='estilo' id='estilo'>
@foreach($estilos as $estilo)
	<option value="{{$estilo->id}}">{{$estilo->nome}}</option>
@endforeach
</select>

<!--
@foreach($estilos as $estilo)
	<input type='checkbox' name='check[]' value="{{$estilo->id}}">{{$estilo->nome}}</checkbox>
@endforeach
-->

<button type="submit" class="btn btn-primary">Salvar</button>
</form>
</body>
</html>