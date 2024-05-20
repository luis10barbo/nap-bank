<?php
function criar_erro(string $mensagem)
{
    return json_encode(array("mensagem" => $mensagem));
}
?>