@extends('layout.main_layout')

@section('content')
    @if($contatos->isNotEmpty())
        
        @foreach($contatos->all() as $contato)

            <li>{{ $contato->nome }}</li>
            <li>{{ $contato->email }}</li>
            <li>{{ $contato->telefone }}</li>
            <br>

        @endforeach
    @endif
    @if($contatos->isEmpty())
        <h1>Nenhum contato cadastrado</h1>
    @endif


@endsection