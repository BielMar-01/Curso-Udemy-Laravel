@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')
<div>
    <ul class="options">
        <li><a class="warning href="{{ route('opcoes',1) }}">warning</a></li>
        <li><a class="info    href="{{ route('opcoes',2) }}">info</a></li>
        <li><a class="success href="{{ route('opcoes',3) }}">success</a></li>
        <li><a class="error   href="{{ route('opcoes',4) }}">error</a></li>
    </ul>
</div>

@if (isset($opcao))
   
    @switch($opcao)
        @case(1)
            @alerta(['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
            <p><Strong>Warning</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(2)
            @alerta(['titulo'=>'Erro Fatal', 'tipo'=>'info'])
            <p><Strong>Info</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(3)
            @alerta(['titulo'=>'Erro Fatal', 'tipo'=>'success'])
            <p><Strong>Success</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(4)
            @alerta(['titulo'=>'Erro Fatal', 'tipo'=>'error'])
            <p><Strong>Error</Strong></p>
            <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
        @default
            
    @endswitch

@endif

@endsection