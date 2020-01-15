@extends('layouts.principal') <!-- Serve para exterder o layout escolhido-->

@section('titulo', 'Clientes')
    
@section('conteudo') <!-- Serve para chamar nomear um layout por seção que sera chamado depois-->
    
    <h3>{{$titulo}}</h3>
    <a href="{{ route('clientes.create')}}">Novo Cliente</a>

    @if(count($clientes)>0)  <!-- Todos os comados do blade iram começar com @ -->

    <ul>
        @foreach ($clientes as $c)
            <li>
                {{ $c['id'] }} | {{ $c['nome'] }} | 
                <a href="{{ route('clientes.edit', $c['id'] )}}">Editar</a> |
                <a href="{{ route('clientes.show', $c['id'] )}}">Info</a>
                <form action="{{ route('clientes.destroy', $c['id']) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Apagar">
                </form>
            </li>
        @endforeach
    </ul>

    <hr>

    @for($i=0;$i<10;$i++)<!-- Outro tipo de loop -->
        {{ $i }},
    @endfor
    
    <br>

    @for($i=0;$i<count($clientes);$i++)<!-- Outro tipo de loop -->
        {{ $clientes[$i]['nome'] }},
    @endfor

    <br>
    

    @foreach ($clientes as $c)<!-- Maneira de loop que o laravel disponibiliza -->
        {{ $c['nome'] }}
    @endforeach

    <br>
    

    @foreach ($clientes as $c)<!-- Outra maneira de loop que o laravel disponibiliza -->
        <p><!-- Automaticamento o larael cria uma variavel chamada loop que podemos acessar -->
            {{ $c['nome'] }} |
            @if($loop->first)
                (primeiro) |
            @endif
            @if($loop->last)
                (ultimo) |
            @endif
            ({{ $loop->index }}) - {{ $loop->iteration }} / {{ $loop->count }}
        </p> 
    @endforeach

    @else

    <h4>Não exitem clientes cadastrados.</h4>

    @endif
    <!-- 
    @empty($clientes)
        <h4>Não exitem clientes cadastrados.</h4> Faz a mesma coisa que o else 
    @endempty-->

@endsection