<?php
require_once(__DIR__ . "/../db/database.php");
function adquirir_sessao()
{
    session_start();
    $id_sessao = session_id();

    return Database::sessao()->adquirir_sessao($id_sessao);
}
?>