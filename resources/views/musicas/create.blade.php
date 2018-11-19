@extends('layouts.app')

@section('content')

<div class="row">
		<div class="col-md-12">
			<p class="h1 text-center">Nova Música</p>
			<hr>
			</p>
		</div>
	</div>

<!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

	<div class="row">
		<div class="col-md-12">
<form action="/musicas" method="post">
{{csrf_field() }}
<div class="form-group row">
<label class="col-form-label col-form-label-lg" for="title">Nome</label>
<input class="form-control form-control-lg" type="text" id="title" name="title">
<label class="col-form-label col-form-label-lg" for="banda">Banda</label>
<input class="form-control form-control-lg" type="text" id="banda" name="banda">
<label class="col-form-label col-form-label-lg" for="dura">Duração</label>
<input class="form-control form-control-lg" type="time" id="dura" name="dura">
<br>
<small id="titleHelp" class="form-text text-muted">Qual a música?</small>
</div>				
<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection
