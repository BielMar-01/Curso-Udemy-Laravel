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

@component('components.alerta')
@endcomponent

@endsection