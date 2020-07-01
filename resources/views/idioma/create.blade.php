@extends('layout')

@section('cabecalho')
   Adicionar Idioma    
@endsection

@section('conteudo')
    <a href="/idioma" class="btn btn-danger">Voltar</a>    
    <hr>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Série">    
        </div>
        
        <button class="btn btn-success form-control">Adicionar</button>
    </form>
@endsection