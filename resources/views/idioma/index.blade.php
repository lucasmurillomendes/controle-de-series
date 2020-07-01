@extends('layout')

@section('cabecalho')
    Idioma  
@endsection

@section('conteudo')
    <a href="/idioma/criar" class="btn btn-dark mb-2">Adicionar</a>    
    <hr>
    <ul class="list-group">
        @foreach($idiomas as $idioma)
            <li class="list-group-item"><?= $idioma; ?></li>
        @endforeach
    </ul>
@endsection