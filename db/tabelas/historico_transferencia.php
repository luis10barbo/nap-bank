<?php
require_once (__DIR__ . "/tabela.php");

class HistoricoTransferencia extends Tabela
{
    public function nome_tabela(): string
    {
        return "historico_transferencia";
    }
    // id VARCHAR(22) PRIMARY KEY,
    // id_remetente INTEGER REFERENCES usuario(idUsuario),
    // id_destinatario INTEGER REFERENCES usuario(idUsuario),
    // banco_destinatario varchar(5),
    // agencia_destinatario varchar(6),
    // conta_destinatario varchar(7),
    // data_transferencia varchar(10),
    // valor REAL,
    // mensagem VARCHAR(256)
    public function criar_externa(int|null $id_remetente, int $id_destinatario, string $banco_destinatario, string $agencia_destinatario, string $conta_destinatario, string $cpf_destinatario, float $valor, string|null $mensagem, $data)
    {
        // $chave = guidv4();
        return $this->__inserir(
            array(
                "id_remetente" => $id_remetente,
                "id_destinatario" => $id_destinatario,
                "banco_destinatario" => $banco_destinatario,
                "agencia_destinatario" => $agencia_destinatario,
                "conta_destinatario" => $conta_destinatario,
                "cpf_destinatario" => $cpf_destinatario,
                "valor" => $valor,
                "mensagem" => $mensagem,
                "data_transferencia" => "01/01/0001"
            )
        );
    }
    public function criar_interna(int|null $id_remetente, int $id_destinatario, string $cpf_destinatario, float $valor, string|null $mensagem, $data)
    {
        // $chave = guidv4();
        return $this->__inserir(
            array(
                "id_remetente" => $id_remetente,
                "id_destinatario" => $id_destinatario,
                "cpf_destinatario" => $cpf_destinatario,
                "valor" => $valor,
                "mensagem" => $mensagem,
                "data_transferencia" => null
            )
        );
    }

    public function buscar_chave(string $chave)
    {
        return $this->__buscar(array("chave" => $chave));
    }

    public function buscar_usuario(int $id_usuario)
    {
        return $this->__buscar(array("id_usuario" => $id_usuario));
    }


    public function atualizar(string $chave, string $nova_chave)
    {
        return $this->__atualizar(array("chave" => $chave), array("chave" => $nova_chave));
    }

    public function remover(string $chave)
    {
        return $this->__remover(array("chave" => $chave));
    }
}
