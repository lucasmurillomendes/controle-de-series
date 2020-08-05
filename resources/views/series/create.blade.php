@extends('layout')

@section('cabecalho')
   Adicionar Séries    
@endsection

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <a href="{{route('serie.listar')}}" class="btn btn-danger">Voltar</a>    
    <hr>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome da Série">    
        </div>
        
        <button class="btn btn-success form-control">Adicionar</button>
    </form>
@endsection