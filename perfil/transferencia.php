<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../static/css/depTrans.css" />
  <link rel="stylesheet" href="../static/css/transferencia/tran.css" />
  <link rel="stylesheet" href="../static/css/lib/bootstrap.css" />
  <title>Transferencia</title>
</head>

<body>
  <div class="container">
    <div class="corpo rounded-lg">
      <header class="menu">
        <div class="esquerda">
          <h2 id="titulo">Transfêrencia</h2>
        </div>
        <div class="direita">
          <div id="mySidenav" class="sidenav rounded-lg">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <a class="active" href="../perfil.php">Perfil</a>
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

      <form class="grid">
        <div class="row justify-content-around ">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="banco">Banco</label>
              <input id="banco" name="banco" type="text" class="form-control" placeholder="000-1" />
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="agencia">Agência</label>
              <input id="agencia" name="agencia" type="text" class="form-control" placeholder="0000-2" />
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="conta">Conta</label>
              <input id="conta" name="conta" type="text" class="form-control" placeholder="0000-33" />
            </div>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-lg-3">
            <div class="form-group">
              <label for="cpf">CPF</label>
              <input id="cpf" type="text" name="cpf" class="form-control" placeholder="123.456.789-10" />
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="data">Data</label>
              <input id="data" type="date" class="form-control" />
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label for="valor">Valor</label>
              <input id="valor" type="text" class="form-control" placeholder="R$0,00" onkeyup="mascara(this)" />
            </div>
          </div>
        </div>
        <div class="row justify-content-around">
          <div class="col-lg-3">
            <div class="form-group">
              <label>Tipo de conta</label><br /><br />
              <input name="rad" id="radio1" type="radio" />
              <label for="radio1">Corrente</label>
              <input name="rad" id="radio2" type="radio" />
              <label for="radio2">Poupança</label>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="form-group">
              <textarea cols="65" rows="6" placeholder="Resumo" class="form-control"></textarea>
            </div>
          </div>
        </div>
        <button class="button-6 rounded" role="button" type="button" data-toggle="modal" data-target="#janela">
          Transferência
        </button>
      </form>

      <div class="modal fade" id="janela" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">
                Transferência
              </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-success" role="alert">
                Transferência realizada com sucesso!
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script type="text/javascript" src="../static/js/lib/jquery.js"></script>
  <script type="text/javascript" src="../static/js/lib/bootstrap.js"></script>

  <script src="../static/js/deptrans.js"></script>
  <script src="../static/js/menu.js"></script>

</body>


</html>