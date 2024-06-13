<?php
require_once (__DIR__ . "/../utils/sessao.php");
$usuario = adquirir_usuario();
if (empty($usuario)) {
    header("Location: ../login.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../static/css/lib/bootstrap.css" />
    <link rel="stylesheet" href="../static/css/historico.css" />
    <link rel="stylesheet" href="../static/css/menu.css">
    <title>Historico</title>
    <script>
        const perfilUsuario = <?php echo json_encode($usuario) ?>;
    </script>
</head>

<body>
    <div class="container container-corpo">
        <div class="corpo rounded-lg">
            <div id="imagemRoxa" class=""></div>
            <header class="menu">
                <div id="mySidenav" class="sidenav rounded-lg">
                    <a href="javascript:void(0)" class="closebtn">&times;</a>
                    <a class="active" href="#">Perfil</a>
                    <a href="transferencia.php">Transferência</a>
                    <a href="deposito.php">Deposito</a>
                    <a href="emprestimo.php">Emprestimo</a>
                    <!-- <a href="#">Cartões</a> -->
                    <a href="pix.php">PIX</a>
                    <a href="javascript:void(0)" id="botao-sair">Sair</a>
                </div>
                <div class="logo">
                    <div class="traco"></div>
                    <div class="traco"></div>
                    <div class="traco"></div>
                </div>
            </header>
            <section class="grid">
                <div class="row">

                </div>
                <div id="rowBaixo" class="row">

                </div>
            </section>
        </div>
    </div>

    <script src="../static/js/lib/jquery.js"></script>
    <script src="../static/js/lib/bootstrap.js"></script>
    <script src="../static/js/historico.js"></script>
    <script src="../static/js/menu.js"></script>
</body>

</html>