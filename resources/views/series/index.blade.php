@extends('layout')

@section('cabecalho')
    Séries    
@endsection

@section('conteudo')
 
@if(!empty($mensagem))
<div class="alert alertsucces">
     {{$mensagem}}
    </div>
@endif

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>    
    <hr>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">
            {{$serie->nome}}
            <form action="/series/remover/{{$serie->id}}" method = "post"
            onsubmit="return confirm('Confirma exclusão?')">
                 @csrf
                <button class="btn btn-danger" >Excluir</button>
            </form>
            </li>
        @endforeach
    </ul>
@endsection