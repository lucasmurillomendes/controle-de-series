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

    <a href="{{ route('serie.criar') }}" class="btn btn-dark mb-2">Adicionar   <i class="fas fa-plus"></i> </a>    
    <hr>
    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$serie->nome}}
            <form action="{{ route('serie.remover', $serie->id) }}" method = "post"
            onsubmit="return confirm('Confirma exclusão?')">
                 @csrf
                <button class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
            </form>
            </li>
        @endforeach
    </ul>
@endsection