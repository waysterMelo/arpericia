
<?php
include ('../includes/db.php');
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    <link rel="icon" href="../css/imagens/admin.ico">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/lobipanel.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/flash.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <link href="css/toastr.css" rel="stylesheet" type="text/css"/>
    <link href="css/emojionearea.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/monthly.css" rel="stylesheet" type="text/css"/>
    <link href="css/stylehealth.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />



</head>
<body class="hold-transition sidebar-mini">



<div class="wrapper">
    <header class="main-header">
        <a href="../index.php" class="logo">
            <span class="logo-mini">
                        <img src="../css/imagens/ar.png" alt="">
                    </span>
            <span class="logo-lg">
                        <img src="../css/imagens/ar.png" alt="">
                    </span>
        </a>
        <nav class="navbar navbar-static-top ">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-tasks"></span>
            </a>
            <div class="navbar-custom-menu">
                <a href="logout.php"><h4 class="text-white"><button class="btn btn-danger btn-lg"><i class="fas fa-sign-out-alt"></i> Sair</button></h4></a>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="image pull-left">
                    <img src="../css/imagens/alcir.jpeg" class="img-circle" alt="User Image">
                </div>
                <div class="info">
                    <h4>BEM VINDO</h4>
                    <?php
                    $email = $_SESSION["email"];
                    ?>
                    <p style="font-size: 1rem;"><?php echo $email; ?></p>
                </div>
            </div>

            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-house-damage"></i><span>AR PERICIA</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?cabecalhoArPericia">Cabecalho</a></li>
                        <li><a href="?imgTPrincipal">Imagem e texto Principal</a></li>
                        <li><a href="?sobre_ar">Sobre Nos</a></li>
                        <li><a href="?sliders_ar">Sliders e Titulo</a></li>
                        <li><a href="?coluna1">Servicos</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-grip-horizontal"></i><span>PAGINA ARLE</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?cursosetreinamentos_header">Cabecalho</a></li>
                        <li><a href="?cursosetreinamentos_imagem">Imagem Fundo</a></li>
                        <li><a href="?cursosetreinamentos_About">Texto Sobre Nos</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="">
                        <i class="fas fa-book"></i> <span>PAGINA LIVROS</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?page_book">cabecalho e imagem de fundo</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="?page_videos">
                        <i class="fas fa-book"></i> <span>PAGINA VIDEOS</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="?page_contato">
                        <i class="fas fa-book"></i> <span>PAGINA CONTATO</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="far fa-images"></i><span>GALERIA</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?add_image_galeria">Adicionar Imagem</a></li>
                        <li><a href="?delete_image_galery">Editar ou Excluir Imagens</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-list-alt"></i> <span>CURSOS</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?add_cursos">Adicionar Cursos</a></li>
                        <li><a href="?edit_cursos">Editar Cursos</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-book"></i> <span>CURSOS EM LIVROS</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?add_livros">Adicionar Livros</a></li>
                        <li><a href="?edit_livro">Editar Livros</a></li>
                        <li><a href="?pag_livro">texto pagamento</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-book"></i> <span>MATERIAIS DIVERSOS</span>
                        <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="?add_materiais">Adicionar Materiais</a></li>
                        <li><a href="?edit_materiais">Editar Materiais</a></li>

                    </ul>
                </li>


                <li class="treeview">
                    <a href="?rodape">
                        <i class="fas fa-solar-panel"></i><span>RODAPE</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="https://webmail.hostinger.com.br/auth" target="_blank">
                        <i class="fas fa-book"></i> <span>EMAIL</span>
                        <span class="pull-right-container">
                        <i class="fas fa-globe"></i>
                        </span>
                    </a>
                </li>
            </ul>
        </div> <!-- /.sidebar -->
    </aside>
    <!-- =============================================== -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-tachometer"></i>
            </div>
            <div class="header-title">
                <h1>DASHBOARD</h1>
            </div>
        </section>


        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <?php

                    if (isset($_GET['cabecalhoArPericia'])){
                        include ('cabecalho_ar_pericia.php');
                    };

                    if (isset($_GET['imgTPrincipal'])){
                        include ('ar_pericia_imgP.php');
                    };

                    if (isset($_GET['sobre_ar'])){
                        include ('sobre_ar.php');
                    };

                    if (isset($_GET['sliders_ar'])){
                        include ("sliders_ar.php");
                    };

                    if (isset($_GET['cursosetreinamentos_header'])){
                        include "ct_header.php";
                    };

                    if (isset($_GET['cursosetreinamentos_imagem'])){
                        include "ct_imagem_fundo.php";
                    };

                    if (isset($_GET['cursosetreinamentos_About'])){
                        include "ct_about_us.php";
                    };

                    if (isset($_GET['delete_image_galery'])){
                        include('delete_image_gallery.php');
                    };

                    if (isset($_GET['add_image_galeria'])){
                        include ('add_galeria.php');
                    };

                    if (isset($_GET['add_cursos'])){
                        include ('add_cursos.php');
                    };

                    if (isset($_GET['edit_cursos'])){
                        include "edit_cursos.php";
                    };

                    if (isset($_GET['add_livros'])){
                        include ('add_livro.php');
                    };

                    if (isset($_GET['edit_livro'])){
                        include "edit_livro.php";
                    };

                    if (isset($_GET['add_materiais'])){
                        include "add_materiais.php";
                    };

                    if (isset($_GET['edit_materiais'])){
                        include "edit_materiais.php";
                    };

                    if (isset($_GET['coluna1'])){
                      include "services.php";
                    };

                    if (isset($_GET['rodape'])){
                        include ("rodape.php");
                    };

                    if (isset($_GET['page_book'])){
                        include ('page_livros.php');
                    }

                    if (isset($_GET['page_videos'])){
                        include('pagina_videos.php');
                    }

                    if (isset($_GET['page_contato'])){
                        include ('contato.php');
                    }

                    if (isset($_GET['pag_livro'])){
                        include ('pagamentos_livros.php');
                    }
                    if (isset($_GET['initial'])) {
                        include ("initial.php");
                    }


                    ?>

                </div>
            </div>
        </div>
    </div> <!-- /.content-wrapper -->
</div> <!-- ./wrapper -->
<!-- ./wrapper -->
<!-- Start Core Plugins
=====================================================================-->
<!-- jQuery -->
<script src="js/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!-- lobipanel -->
<script src="js/lobipanel.min.js" type="text/javascript"></script>
<!-- Pace js -->
<script src="js/pace.min.js" type="text/javascript"></script>
<!-- SlimScroll -->
<script src="js/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="js/fastclick.min.js" type="text/javascript"></script>
<!-- Hadmin frame -->
<script src="js/custom1.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

<script>
    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4'
    });
</script>

</body>
</html>


<?php } ?>