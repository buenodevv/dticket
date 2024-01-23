<?php
session_start();
require_once('./config/conection.php');

$name = $_POST['name'];

//VERIFICAR SE O REGISTRO JÁ ESTÁ CADASTRADO
$sql = "INSERT INTO profissionals (`name`)value (\"$name\")";

$exec = $pdo->query($sql);

?>
