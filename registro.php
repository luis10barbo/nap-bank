<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="api/registro.php" method="post">
        <p>registro de login</p>
        <input type="text" placeholder="Apelido" name="apelido"></input>
        <input type="email" placeholder="Email" name="email"></input>
        <input type="password" placeholder="Senha" name="senha"></input>
        <input type="password" placeholder="Confimar senha" name="senha_confirmar"></input>
        <input type="password" placeholder="Nome Completo" name="nome"></input>
        <input type="password" placeholder="CPF" name="cpf"></input>
        <input type="date" placeholder="Data Nascimento" name="data_nascimento"></input>


        <input type="submit"></input>

    </form>
</body>

</html>