<?php

class conectar{
    private $servidor = "br526.hostgator.com.br";
    private $usuario = "branc349_covid";
    private $password = "jos1210@host";
    private $db = "branc349_covid";

    public function conexao(){
        $conexao = mysqli_connect($this->servidor, $this->usuario, $this->password, $this->db);

        return $conexao;

    }

}

?>