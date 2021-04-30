<?php
//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', 'jos1210lin');
define('DBNAME', 'transmunc');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);