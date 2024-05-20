<?php
require_once(__DIR__ . "/../db/database.php");
require_once(__DIR__ . "/../utils/redirect.php");
require_once(__DIR__ . "/../utils/sessao.php");
$sessao = adquirir_sessao();
Database::sessao()->atualizar($sessao["id_sessao"], null);

voltar_pagina();
?>