<?php

class Acesso {
    
    
    public function Conexao() {

        $this->cnx = mysqli_connect("localhost", "root", "", "agendadb");

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    
    public function Query($sql) {
        $this->result = mysqli_query($this->cnx,$sql, MYSQLI_STORE_RESULT);
    }

    
    public function __destruct() {
        mysqli_close($this->cnx);
    }

}
?> 