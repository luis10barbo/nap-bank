<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="static/css/login/login.css" />
  <link rel="stylesheet" href="static/css/lib/bootstrap.css" />
  <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    /> -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https: //fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet" />
  <title>Login</title>
</head>

<body>
  <div class="main">
    <form id="form-entrar">
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email" />
      </div>
      <div class="form-group">
        <label for="senha">Senha</label>
        <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha" />
      </div>
      <div id="mover" class="row">
        <a id="a" href="registrar.php">Fazer Cadastro</a>
        <button id="button" class="btn btn-primary">Enviar</button>
      </div>
    </form>
  </div>
  <script src="static/js/lib/jquery.js"></script>
  <script src="static/js/lib/bootstrap.js"></script>
  <script src="static/js/entrar.js"></script>
</body>

</html>