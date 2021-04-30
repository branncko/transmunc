<?php

class portarias{
    public function adicionarPortaria($dados){
        $c = conectar();
        $conexao = $c->conexao();

        $sql = "INSERT INTO portarias (portaria, publicacao, exercicio, tipo, nome, cargo, detalhamento, documento) VALUES ('$dados[0]', '$dados[1]','$dados[2]','$dados[3]','$dados[4]','$dados[5]','$dados[6]','$dados[7]', )";

        return mysqli_query($conexao, $sql);
    }
} 