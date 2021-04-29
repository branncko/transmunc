<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Listar Contatos</title>
    </head>
    <body>
        <h1>Listar Mensagem</h1>
        <?php
        //SQL para selecionar os registros
        $result_msg_cont = "SELECT * FROM mensagens_contatos ORDER BY id ASC";

        //Seleciona os registros
        $resultado_msg_cont = $conn->prepare($result_msg_cont);
        $resultado_msg_cont->execute();

        while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
            echo "ID: " . $row_msg_cont['id'] . "<br>";
            echo "Nome: " . $row_msg_cont['nome'] . "<br>";
            echo "E-mail: " . $row_msg_cont['email'] . "<br>";
            echo "Assunto: " . $row_msg_cont['assunto'] . "<br><hr>";
        }
        ?>
    </body>
</html>
