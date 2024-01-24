<?php

session_start();
require_once('../config/conection.php');

$name = $_POST['name'];

//Verificar se ja tem Cadastro

$res_c = $pdo->query("SELECT * from profissionals where name = '$name'");

$dados_c = $res_c->fetchAll(PDO::FETCH_ASSOC);
$linhas = count($dados_c);

if ($linhas == 0) {
    $res = $pdo->prepare("INSERT into profissionals (name) values (:name)");

    $res->bindValue(":name", $name);

    $res->execute();

      
        echo "<script>
        Toastify({
            text: 'Cadastrado com sucesso!',
            duration: 2000,
            style: {
              background: 'linear-gradient(to right, #3FF024, #7524F0)',
            },
            offset: {
              x: 50, 
              y: 10 
            },
            }).showToast();
        </script>";
} else {
    echo "<script>
        Toastify({
            text: 'Profissional ja cadastrado!',
            duration: 2000,
            style: {
              background: 'linear-gradient(to right, #D80032, #7524F0)',
            },
            offset: {
              x: 50, 
              y: 10 
            },
            }).showToast();
        </script>";
}
