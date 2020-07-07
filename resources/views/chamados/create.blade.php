@extends('layout.app')
@section('content')



<div class="container">

    <h1>Inserir Chamados</h1>

      
        @if(session('success'))
          <p class="alert-success"> {{session('success') }}</p>
        @endif
    

    <form action="{{ url('/criar_chamado')}}" method="POST">
      {{ csrf_field()}}
    <div class="form-group">
        <label for="formGroupExampleInput">Nome(pai ou responsável)</label>
        <input type="text" class="form-control" id="nome_pai" name="nome_pai" >
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Nome do aluno</label>
        <input type="text" class="form-control" id="nome_alumo" name="nome_aluno" >
    </div>

    <div class="form-row">

    <div class="col">
    <label for="formGroupExampleInput2">Turma</label>
      <input type="text" class="form-control" id="turma" name="turma">
    </div>

    <div class="col">
    <label for="formGroupExampleInput2">Contato(telefone)</label>
      <input type="text" class="form-control" id ="telefone" name="telefone">
    </div>

  </div>
    <br>


    <div class="form-group">
        <label for="formGroupExampleInput2">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" >
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Assunto(Descrição do problema)</label>
        <textarea class="form-control" id="assunto" name="assunto" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>




</div>



@endsection