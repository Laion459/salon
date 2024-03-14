<!DOCTYPE html>
<html>
<head>
    <title>Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">

</head>
<body>
<h1>Cadastro de Usuário</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf

    <label for="first_name">Primeiro Nome:</label>
    <input type="text" id="first_name" name="first_name" required>

    <label for="last_name">Sobrenome:</label>
    <input type="text" id="last_name" name="last_name" required>

    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required>

    <label for="date_of_birth">Data de Nascimento:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" required>

    <label for="sex">Sexo:</label>
    <select id="sex" name="sex" required>
        <option value="male">Masculino</option>
        <option value="female">Feminino</option>
        <option value="other">Outro</option>
    </select>

    <label for="address">Endereço:</label>
    <textarea id="address" name="address"></textarea>

    <button type="submit">Cadastrar</button>
</form>
</body>
</html>
