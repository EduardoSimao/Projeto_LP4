<?php

require_once('Conexao.php');

class Usuario {

    Private $nome;
	Private $username;
	Private $senha;
	Private $data_nascimento;
    Private $genero;
    Private $telefone;
    Private $email;
    Private $foto;
    
    public function incluir($nome, $username, $senha, $data_nascimento, $genero) { 

        $insert = "Insert into users(nome, username, senha, data_nascimento, sexo) values ('$nome', '$username', '$senha', '$data_nascimento', '$genero')";
			
        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($insert);
    }

    
    public function consultar($sql) {

        $Acesso = new Acesso();

        $Acesso->Conexao();

        $Acesso->Query($sql);

        $this->Linha = @mysqli_affected_rows($Acesso->result);

        $this->Result = $Acesso->result;
    } 

}