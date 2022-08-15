<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeStore</title>
    <link rel="stylesheet" href="{{url('CSS/kirei.css')}}">
    <link rel="icon" href="{{'../IMG/iconWeStore.png'}}">
</head>

<body>

    <header>
        <nav class="navegarei">
            <img src="{{'../IMG/logoWeStore.png '}}">
            <ul>
                <li>
                    <a href="\">Home</a>
                </li>
                <li>
                    <a href="\contato">Contato</a>
                </li>
                <li>
                    <a href="\cliente">Cliente</a>
                </li>
                <li>
                    <a href="\categoria">Categoria</a>
                </li>
                <li>
                    <a href="\produto">Produto</a>
                </li>
                <li>
                    <a href="\pedido">Pedido</a>
                </li>
            </ul>
        </nav>

        <div class="BoxMove">
            <h1>WeStore</h1>
            <h2>Bem vindo a loja do amanhã!</h2>
        </div>

    </header>


    @yield('content')

    <footer>

        <h2>@WeStore 2008</h2>

    </footer>

</body>

</html>