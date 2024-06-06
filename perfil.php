<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="static/css/lib/bootstrap.css" />
    <link rel="stylesheet" href="static/css/perfil.css" />
    <title>Document</title>
  </head>

  <body>
    <div class="container">
      <div class="corpo rounded-lg">
        <div id="imagemRoxa" class=""></div>
        <header class="menu">
          <div id="mySidenav" class="sidenav rounded-lg">
            <a href="javascript:void(0)" class="closebtn">&times;</a>
            <a class="active" href="#">Perfil</a>
            <a href="transferencia.html">Transferência</a>
            <a href="deposito.html">Deposito</a>
            <a href="#">Emprestimo</a>
            <a href="#">Cartões</a>
            <a href="#">PIX</a>
          </div>
          <div class="logo">
            <div class="traco"></div>
            <div class="traco"></div>
            <div class="traco"></div>
          </div>
        </header>
        <section class="grid">
          <div class="row">
            <div id="foto-perfil" class="col-md-4">
              <img
                id="imgPerfil"
                src="static/img/perfil/perfil-de-usuario.png"
                alt=""
              />
            </div>
            <div id="info-perfil" class="col-md">
              <div id="info-nome" class="row-md">
                <h3>Nome Completo do Usuario</h3>
                <h6>Email do Usuario</h6>
              </div>
              <div id="info-conta" class="row-md-6">
                <div class="col-md-3">
                  <h4>Agência</h4>
                  <h5>0001</h5>
                </div>
                <div class="col-md-3">
                  <h4>Conta</h4>
                  <h5>0000-33</h5>
                </div>
              </div>
              <div id="info-valores" class="row">
                <div id="info-saldo" class="col-md-5 rounded-lg">
                  <h5>Saldo</h5>
                  <div class="baixo">
                    <label id="sal">●●●●●</label>
                    <button
                      id="btnSaldo"
                      class="button-6 md rounded"
                      role="button"
                      type="button"
                      data-toggle="modal"
                      data-target="#janela"
                      style="margin: 0"
                    >
                      Mostrar
                    </button>
                  </div>
                </div>

                <div id="info-fatura" class="col-md-5 rounded-lg">
                  <h5>Fatura Atual</h5>
                  <div class="baixo">
                    <label id="fatu">●●●●●</label>
                    <button
                      id="btnFatu"
                      class="button-6 rounded"
                      role="button"
                      type="button"
                      data-toggle="modal"
                      data-target="#janela"
                      style="margin: 0"
                    >
                      Mostrar
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="rowBaixo" class="row">
            <div class="row">
              <h3 class="col-md" id="acoes">Ações Rápidas</h3>
            </div>
            <div id="botoesAcoes" class="row">
              <button
                id="btnAcoes"
                class="button-6 col-md rounded"
                role="button"
                type="button"
                data-toggle="modal"
                data-target="#janela"
              >
                <img
                  class="icone-botao"
                  src="static/img/perfil/transfer.svg"
                  alt=""
                />
                Transferência
              </button>
              <button
                id="btnAcoes"
                class="button-6 col-md rounded"
                role="button"
                type="button"
                data-toggle="modal"
                data-target="#janela"
              >
                <img class="icone-botao" src="static/img/perfil/pay.svg" />Pagar
              </button>
              <button
                id="btnAcoes"
                class="button-6 col-md rounded"
                role="button"
                type="button"
                data-toggle="modal"
                data-target="#janela"
              >
                <img
                  class="icone-botao"
                  src="static/img/perfil/deposit.svg"
                />Depósito
              </button>
              <button
                id="btnAcoes"
                class="button-6 col-md rounded"
                role="button"
                type="button"
                data-toggle="modal"
                data-target="#janela"
              >
                <img
                  class="icone-botao"
                  src="static/img/perfil/empres.svg"
                />Empréstimos
              </button>
              <button
                id="btnAcoes"
                class="button-6 col-md rounded"
                role="button"
                type="button"
                data-toggle="modal"
                data-target="#janela"
              >
                <img
                  class="icone-botao"
                  src="static/img/perfil/credit-card.svg"
                />Cartões
              </button>
            </div>
          </div>
        </section>
      </div>
    </div>

    <script src="../static/js/lib/jquery.js"></script>
    <script src="../static/js/lib/bootstrap.js"></script>
    <script src="static/js/perfil.js"></script>
    <script src="static/js/menu.js"></script>
  </body>
</html>