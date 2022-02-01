<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <form method="POST" action="{{route('cadastro.validation')}}">
        @csrf
        <div>
            <label for="">nome</label>
            <input type="text" name="nome" id="nome">

            <label for="">cpf</label>
            <input type="text" name="cpf" id="cpf">

            <label for="">cel</label>
            <input type="phone" name="cel" id="cel">

            <label for="">email</label>
            <input type="email" name="email" id="email">

            <label for="">senha</label>
            <input type="password" name="senha" id="senha">

            <button>Cadastrar</button>
        </div>
    </form>
</body>
</html>