<?php
$mysqli_connection = new MySQLi('localhost', 'transmunc', 'lamp', 'root');
if($mysqli_connection->connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}
?>