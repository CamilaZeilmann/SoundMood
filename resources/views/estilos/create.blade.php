@extends('layouts.app')

@section('content')

<div class="row">
		<div class="col-md-12">
			<p class="h1 text-center">Novo Estilo</p>
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
<form action="/estilos" method="post">
{{csrf_field() }}
<div class="form-group row">
<label class="col-form-label col-form-label-lg" for="title">Nome</label>
<input class="form-control form-control-lg" type="text" id="title" name="title">
<small id="titleHelp" class="form-text text-muted">Qual o estilo?</small>
</div>				
<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@endsection
