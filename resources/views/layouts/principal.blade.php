<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Views</title>
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}"> <!--Asset serve para pegar arquivos do public -->
</head>
<body>
    <div class="row">
        <div class="col1">
            <div class="menu">
                <ul>
                    <li><a class="active" href="{{ route('clientes.index')}}">Clientes</a></li>
                    <li><a href="">Produtos</a></li>
                    <li><a href="">Departamentos</a></li>
                </ul>
            </div>
            
        </div>
        <div class="col2">
            @yield('conteudo') <!-- Serve para chamar layputs especificos -->
        </div>
    </div>
</body>
</html>