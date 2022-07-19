<?php

require "../database/Conexao.php"; // require - importa uma vez | require_once - importa toda vez que o arquivo pessoas é acessado/chamado.

class Pessoa {

    private $conexao = null;
    protected $nomeTabela = "pessoas";
    
    public $id = 0;
    public $name = "";
    public $CEP = 0;
    public $mail = "";
    public $phone = 0;
    public $socialweb = "";
    public $status = true;

    public function __construct()
    {
        global $conexao; // acessamos (global) a variavel $conexao do arquivo Conexao.php
        $this->conexao = $conexao;
    }

    // desconectamos do banco de dados.
    public function desconectar()
    {
        $this->conexao->close();
        $this->conexao = null;
    }

    public function create($id, $nome, $email, $cpf, $cnpj,$status, $cep, $telefone){
        $sql = "INSERT
			INTO
				{$this->nomeTabela}
			(
				id,
				nome,
				email,
				cpf,
                cnpj,
                status,
				genero,
                cep,
                telefone

			)
			VALUES(
				'{$id}',
				'{$nome}',
				'{$email}',
				'{$cpf}',
				'{$cnpj}',
				'{$status}'
				'{$cep}'
				'{$telefone}'
			);";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->insert_id; // retorna ultimo id gravado no banco.
        }

        return 0;
    }

    public function update($id, $nome, $email, $cpf, $cnpj, $status, $genero, $cep, $telefone){
        $sql = "UPDATE
				{$this->nomeTabela}
			SET
                id = {$id}
				nome = {$nome}
				email = {$email}
				cpf = {$cpf}
                cnpj = {$cnpj}
                status = {$status}
				genero = {$genero}
                cep = {$cep}
                telefone = {$telefone}
			WHERE
				id = {$id};";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->affected_rows; // retorna o numero de linhas atualizadas.
        }

        return 0;
    }

    public function read($id){
        $sql = "SELECT * FROM {$this->nomeTabela} WHERE id={$id} LIMIT 1";
        $result = $this->conexao->query($sql);

        return $result ?? [];

    }

    public function read_all(){
        $sql = "SELECT * FROM {$this->nomeTabela}";
        $result = $this->conexao->query($sql);

        return $result ?? [];

    }

    public function delete($id){

        #Delete real
            //$sql = "DELETE FROM {$this->nomeTabela} WHERE id={$id}";
            //$result = $this->conexao->query($sql);


        #Excluir fake ou soft delete

        $sql = "UPDATE
				{$this->nomeTabela}
			SET
                deleted = true
			WHERE
				id = {$id};";

        $result = $this->conexao->query($sql);

        if ($result) {
            return $this->conexao->affected_rows; // retorna o numero de linhas atualizadas.
        }

        return 0;
    
            return $result;

    }
    
}

$pessoa = new Pessoa();
$dadosPessoa = [];

$result = $pessoa->read_all();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $dadosPessoa[] = $row;
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($dadosPessoa);
exit();