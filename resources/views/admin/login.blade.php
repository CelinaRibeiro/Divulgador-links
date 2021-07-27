<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>B7Bio - Login</title>
    <link rel="stylesheet" href="{{url('assets/css/admin.login.css')}}" />
</head>

<body>
    <div class="loginArea">
        <h2>Login</h2>

        @if($error)
            <div class="error">{{$error}}</div>
        @endif

        <form method="POST">
            @csrf
            <input type="email" name="email" placeholder="Digite seu e-mail" />
            <input type="password" name="password" placeholder="Digite sua senha" />

            <input type="submit" value="Entrar" />

            Ainda não tem cadastro? <a href="{{url('/admin/register')}}">Cadastre-se</a>
        </form>
    </div>
</body>
</html>