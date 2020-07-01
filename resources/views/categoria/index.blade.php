@extends('layout')

@section('cabecalho')
    Categoria  
@endsection

@section('conteudo')
    <a href="/categoria/criar" class="btn btn-dark mb-2">Adicionar</a>    
    <hr>
    <ul class="list-group">
        @foreach($categorias as $categoria)
            <li class="list-group-item"><?= $categoria; ?></li>
        @endforeach
    </ul>
@endsection