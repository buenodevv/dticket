<?php
require_once('../config/conection.php');
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $nome_sistema ?> Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/dataTables.select.min.js">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../images/favicon.png" />
    //tostyfy
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="../js/jquery.js"></script>
    <script src="../js/notify.min.js"></script>

</head>

<body>
<div class="col-md-12 text-center text-muted mt-3" id="mensagem">
                                        
                                        </div>
    <?php
    require_once("../dashboard/verify.php");
    ?>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <?php
        include('../partials/navbar.php')
        ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->

            <?php
            include('../partials/settings-panel.php')
            ?>

            <!-- partial -->
            <?php
            include('../partials/sidebar.php')
            ?>
            <!-- partial -->
            <div class="main-panel">
                <?php
                echo '<script>
      Toastify({
        text: "Acesso liberado!",
        duration: 2000,
        style: {
          background: "linear-gradient(to right, #3FF024, #7524F0)",
        },
        offset: {
          x: 50, 
          y: 10 
        },
        }).showToast();
        </script>';
                ?>
                <div class="content-wrapper">

                    <div class="row botao-novo">
                        <div class="col-md-12">

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Novo Profissional
                            </button>

                        </div>

                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-4">
                                    <div class="justify-content-end d-flex">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Cadastro de profissionais</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form id="form" method="post">
                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite um nome">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>


                                    <button class="btn btn-primary" name=btn-salvar id="btn-salvar">Salvar</button>
                                    <div class="col-md-12 text-center text-muted mt-3" id="mensagem">
                                        
                                    </div>
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php
                include('../partials/footer.php')
                ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- MODAL -->
    <!-- container-scroller -->
    <!-- Custom js for this page-->

    <script type="text/javascript">
        $(document).ready(function() {
            $('#btn-salvar').click(function(event) {
                event.preventDefault();
                $.ajax({
                    url: "insert.php",
                    method: "post",
                    data: $('form').serialize(),
                    dataType: "text",
                    success: function(mensagem) {
                        $('#mensagem').html(mensagem)
                    }

                })
            })
        })
    </script>
    <!-- End custom js for this page-->
</body>

</html>