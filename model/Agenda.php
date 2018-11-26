<?php

require_once('Conexao.php');

class Agenda {

    Private $idagenda;
    Private $titulo;
    Private $data;
    Private $hora;
	Private $descricao;
	Private $local;
    Private $id_users;

    public function cadastrar($titulo, $data, $hora, $descricao, $local, $id_users){
        $insert = "Insert into agenda(titulo, data, hora, descricao, local, id_users) 
        values ('$titulo', '$data', '$hora', '$descricao', '$local', '$id_users')";
			
        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }

    public function listar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }
    
    public function alterar($titulo, $data, $hora, $descricao, $local, $idagenda) { 

        $update = 'update agenda set titulo="' . $titulo . '", data="' . $data . '", hora="' . $hora . '"
        , descricao="' . $descricao . '", local="' . $local . '" where idagenda="' . $idagenda . '"';
			
        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($update);

        $this->Linha = mysqli_num_rows($Acesso->result);

        $this->Result = $Acesso->result;
    }

    public function excluir($idagenda) { 

        $delete = 'delete from agenda where idagenda="' . $idagenda . '"';
			
        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($delete);
    }

}