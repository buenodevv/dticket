<?php
session_start();
    require_once('./config/conection.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = $pdo->prepare("SELECT * from users where email = :email and password = :password ");
    $query->bindValue(":email", "$email");
    $query->bindValue(":password", "$password");
    $query->execute();

    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $rows = count($res);
    if($rows > 0){
        $_SESSION['name'] = $res[0]['name'];
        $_SESSION['email'] = $res[0]['email'];
        $_SESSION['level'] = $res[0]['level'];
        $_SESSION['id'] = $res[0]['id'];

        echo '<script>window.location="dashboard"</script>';
    }else{
        $_SESSION['error'] = 1;
        echo '<script>window.location="./"</script>';
    }
?>