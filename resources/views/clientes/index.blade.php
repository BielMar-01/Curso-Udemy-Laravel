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

@else

<h4>Não exitem clientes cadastrados.</h4>

@endif

@empty($clientes)
    <h4>Não exitem clientes cadastrados.</h4> <!-- Faz a mesma coisa que o else -->
@endempty