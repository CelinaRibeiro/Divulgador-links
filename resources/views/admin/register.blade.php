<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="UTF-8" />
        <title>B7Bio - Cadastro</title>
        <link rel="stylesheet" href="{{url('/assets/css/admin.login.css' )}}" />
    </head>

    <body>
        <div class="loginArea">
            <h2>Cadastro</h2>

            @if ($error)
                <div class="error">{{$error}}</div>
            @endif

            <form method="POST">
                @csrf
                <input type="email" name="email" placeholder="Digite um e-mail" />
                <input type="password" name="password" placeholder="Digite uma senha" />

                <input type="submit" value="Cadastrar" />

                Já é cadastrado? <a href="{{url('/admin/login')}}">Faça o Login</a>
            </form>
        </div>
    </body>
</html>