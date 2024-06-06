<?php

function criar_msg(string $mensagem, string $tipo = "msg")
{
    return json_encode(array("tipo" => "erro", "mensagem" => $mensagem));
}
function criar_erro(string $mensagem)
{
    return criar_msg($mensagem, "erro");
}
