@extends('layouts.principal')

@section('titulo', 'Departementos')

@section('conteudo')
    <h3>Departamentos</h3>

    <ul>
        <li>Computadores</li>
        <li>Eletronicos</li>
        <li>Acessórios</li>
        <li>Roupas</li>
    </ul>

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'info'])
<p><Strong>Erro inesperado</Strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'error'])
<p><Strong>Erro inesperado</Strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'success'])
<p><Strong>Erro inesperado</Strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@component('components.alerta',['titulo'=>'Erro Fatal', 'tipo'=>'warning'])
<p><Strong>Erro inesperado</Strong></p>
<p>Ocorreu um erro inesperado</p>
@endcomponent

@endsection