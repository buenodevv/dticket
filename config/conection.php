<?php
//Dados de servidor
$server = 'localhost';
$db_name = 'dticket';
$user = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:dbname=$db_name;host=$server;charset=utf8", "$user", "$password");
} catch (Exception $e) {
    echo 'Erro ao conectar ao banco!<br>';
    //echo $e;
}


// Variaveis globais

$nome_sistema = 'Dtickets1';
$email_sistema = 'admin@gmail.com';