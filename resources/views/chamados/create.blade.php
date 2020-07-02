@extends('layout.app')
@section('content')



<div class="container">

    <h1>Inserir Chamados</h1>

    <form>

    <div class="form-group">
        <label for="formGroupExampleInput">Nome(pai ou responsável)</label>
        <input type="text" class="form-control" id="formGroupExampleInput" >
    </div>

    <div class="form-group">
        <label for="formGroupExampleInput2">Nome do aluno</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" >
    </div>

    <div class="form-row">

    <div class="col">
    <label for="formGroupExampleInput2">Turma</label>
      <input type="text" class="form-control" >
    </div>

    <div class="col">
    <label for="formGroupExampleInput2">Contato(telefone)</label>
      <input type="text" class="form-control" >
    </div>

  </div>
    <br>


    <div class="form-group">
        <label for="formGroupExampleInput2">E-mail</label>
        <input type="email" class="form-control" id="formGroupExampleInput2" >
    </div>


    <div class="form-group">
        <label for="exampleFormControlTextarea1">Assunto(Descrição do problema)</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

    </form>




</div>



@endsection