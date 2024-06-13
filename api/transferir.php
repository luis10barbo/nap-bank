<?php
include_once (__DIR__ . "/../db/database.php");
include_once (__DIR__ . "/../utils/sessao.php");
include_once (__DIR__ . "/../utils/msg.php");
include_once (__DIR__ . "/../utils/pix.php");

$transferencia_externa = true;
if (isset($_POST["externa"])) {
    $transferencia_externa = false;
}

$usuario = adquirir_usuario();
if (!isset($usuario)) {
    echo criar_erro("Nao autorizado, faca login antes de usar essa funcionalidade");
    die();
}

if (!isset($_POST["valor"])) {
    echo criar_erro("Voce precisa definir um valor valido para gerar uma transferencia!");
    die();
}
$valor = $_POST["valor"];

if (!isset($_POST["cpf"])) {
    echo criar_erro("Voce precisa definir um cpf para envio");
    die();
}
$cpf = $_POST["cpf"];

if (!isset($_POST["data"])) {
    echo criar_erro("Voce precisa definir uma data para envio");
    die();
}
$data = $_POST["data"];

if (!is_numeric($valor)) {
    echo criar_erro("Valor deve ser um numero!");
    die();
}
if ($valor <= 0) {
    echo criar_erro("Valor deve ser maior que R$0!");
    die();
}

if ($usuario["saldo"] < $valor) {
    echo criar_erro("Voce nao tem saldo suficiente, saldo disponivel: R$" . $usuario["saldo"]);
    die();
}

$destinatario = Database::usuario()->buscar_cpf($cpf);
if (empty($destinatario)) {
    echo criar_erro("Usuario com cpf " . $cpf . " nao existe!");
    die();
}


Database::usuario()->atualizar_saldo($usuario["id_usuario"], $usuario["saldo"] - $valor);
if ($transferencia_externa !== false) {
    Database::usuario()->atualizar_saldo($destinatario["id_usuario"], $destinatario["saldo"] + $valor);
    echo criar_sucesso("Voce transferiu R$" . $valor . " para " . $destinatario["nome_usuario"] . "!");
} else {
    echo criar_sucesso("Voce transferiu R$" . $valor . " para cpf: " . $cpf . ", banco: " . $_POST["banco"] . ", agencia: " . $_POST["agencia"] . ", conta: " . $_POST["conta"] . "!");

}