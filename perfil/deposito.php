<?php
require_once (__DIR__ . "/../utils/sessao.php");
if (empty(adquirir_usuario())) {
  header("Location: ../login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../static/css/deposito/dep.css" />
  <link rel="stylesheet" href="../static/css/depTrans.css" />
  <link rel="stylesheet" href="../static/css/lib/bootstrap.css" />

  <title>Depósito</title>
</head>

<body>
  <div class="container container-corpo">
    <div class="corpo rounded-lg">
      <header class="menu">
        <div class="esquerda">
          <h2 id="titulo">Depósitar em sua conta</h2>
        </div>
        <div class="direita">
          <div id="mySidenav" class="sidenav rounded-lg">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <a class="active" href="./">Perfil</a>
            <a href="transferencia.php">Transferência</a>
            <a href="deposito.php">Depósito</a>
            <a href="emprestimo.php">Emprestimo</a>
            <a href="#">Cartões</a>
            <a href="pix.php">PIX</a>
          </div>
          <div class="logo">
            <div class="traco"></div>
            <div class="traco"></div>
            <div class="traco"></div>
          </div>
        </div>
      </header>
      <div class="row justify-content-around">
        <div class="col-lg-12">
          <div class="form-group">
            <label>Tipo de Deposito</label><br /><br />
            <input id="radio1" name="rad" type="radio" />
            <label for="radio1">PIX</label>
            <input id="radio2" name="rad" type="radio" />
            <label for="radio2">Boleto</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="form-group">
            <label for="valor">Valor</label>
            <input id="valor" type="text" class="form-control" placeholder="R$0,00" onkeyup="mascara(this)" />
          </div>
        </div>
      </div>
      <div class="baixo">
        <div class="modal fade" id="janela" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                  Deposito.
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="alert alert-danger" role="alert">
                  Deposito não realizado!
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="button-6 rounded" role="button" type="button" data-toggle="modal" data-target="#janela">
          Depósito
        </button>
        <p>Você passara a ter R$ <span>X</span> em sua conta NAP</p>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="../static/js/lib/jquery.js"></script>
  <script type="text/javascript" src="../static/js/lib/bootstrap.js"></script>

  <script src="../static/js/deptrans.js"></script>
  <script src="../static/js/menu.js"></script>
</body>

</html>

<!--



-->