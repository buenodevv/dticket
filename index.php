<?php
session_start();
    require_once('./config/conection.php');
    $query = $pdo->query("SELECT * from users");
    $res = $query->fetchAll(PDO::FETCH_ASSOC);
    $rows = @count($res);
    $password = '123';
    $pass_crip = md5($password);
    if(!$rows){
      $query = $pdo->query("INSERT into users SET 
        name = '$nome_sistema', 
        email = '$email_sistema', 
        password = '$password', 
        password_crip = '$pass_crip', 
        level = 'Administrador', 
        active = 'y' ");
    }
 ?>


<!DOCTYPE html>
<html lang="pt">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dtickets Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./vendors/feather/feather.css">
  <link rel="stylesheet" href="./vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="./vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="./images/favicon.png" />
  <script src="./js/jquery.js"></script>
  <script src="./js/notify.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
</head>

<body>
  

  <div class="container-scroller">
  <?php
  if (@$_SESSION['error'] == 1){
    echo '<script>
    Toastify({
      text: "Senha ou usuário incorreto!",
      duration: 2000,
      style: {
        background: "linear-gradient(to right, #D80032, #7524F0)",
      },
      offset: {
        x: 50, 
        y: 10 
      },
      }).showToast();
    </script>';
  }
  
   session_destroy();
?>
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="./images/logo.svg" alt="logo">
              </div>
              <h4>Olá! Vamos iniciar</h4>
              <h6 class="font-weight-light">Faça login para continuar.</h6>
              <form method="post" action="auth.php" class="pt-3">

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="InputEmail1" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="InputPassword1" placeholder="Senha">
                </div>
                <div class="mt-3">
                  
                    <button id="demo" class=" btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Esqueceu a senha?</a>
                </div>

                Don't have an account? <a href="register.html" class="text-primary">Create</a>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/hoverable-collapse.js"></script>
  <script src="./js/template.js"></script>
  <script src="./js/settings.js"></script>
  <script src="./js/todolist.js"></script>
  
  <!-- endinject -->
</body>

</html>