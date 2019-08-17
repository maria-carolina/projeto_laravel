<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autenticação</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Registro de Usuários</a>
        </div>

        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Olá, usuário logado</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Registrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Login</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    @yield('content')
    <script src="{{asset('js/app.js')}}"> </script>
</div>
</body>
</html>
