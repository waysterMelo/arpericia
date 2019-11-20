
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
                    <h4 class="text-white">BEM VINDO AO PAINEL DE ADMINISTRACAO DO WEBSITE</h4>
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
                            <li><a href="painel.php?cabecalhoArPericia">Cabecalho</a></li>
                            <li><a href="painel.php?imgTPrincipal">Imagem e texto Principal</a></li>
                            <li><a href="painel.php?sobre_ar">Sobre Nos</a></li>
                            <li><a href="painel.php?sliders_ar">Sliders e Titulo</a></li>

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
                            <li><a href="painel.php?cursosetreinamentos_header">Cabecalho</a></li>
                            <li><a href="painel.php?cursosetreinamentos_imagem">Imagem Fundo</a></li>
                            <li><a href="painel.php?cursosetreinamentos_About">Texto Sobre Nos</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="far fa-images"></i><span>GALERIA</span>
                            <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="painel.php?add_image_galeria">Adicionar Imagem</a></li>
                            <li><a href="painel.php?delete_image_galery">Editar ou Excluir Imagens</a></li>
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
                            <li><a href="painel.php?add_cursos">Adicionar Cursos</a></li>
                            <li><a href="painel.php?edit_cursos">Editar Cursos</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fas fa-book"></i> <span>LIVROS</span>
                            <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="painel.php?add_livros">Adicionar Livros</a></li>
                            <li><a href="painel.php?edit_livro">Editar Livros</a></li>

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
                            <li><a href="painel.php?add_materiais">Adicionar Materiais</a></li>
                            <li><a href="painel.php?edit_materiais">Editar Materiais</a></li>

                        </ul>
                    </li>

                </ul>
            </div> <!-- /.sidebar -->
        </aside>
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-title">
                    <h1>Painel de Administracao</h1>
                </div>
            </section>


            <div class="container">
                <div class="row">
                    <div class="col-md-10">

                        <?php

                        if(isset($_GET['edit_product'])){

                            $edit_id = $_GET['edit_product'];

                            $get_p = "select * from cursos where id_cursos='$edit_id'";

                            $run_edit = mysqli_query($con,$get_p);

                            $row_edit = mysqli_fetch_array($run_edit);

                            $p_title = $row_edit['titulo'];

                            $p_image1 = $row_edit['img'];

                            $carga = $row_edit['carga_horaria'];

                            $instrutor = $row_edit['instrutor'];

                            $lancamento = $row_edit['lancamento'];

                            $obj = $row_edit['objetivo'];

                            $alvo = $row_edit['publico_alvo'];

                            $conteudo = $row_edit['conteudo_programatico'];

                            $url_video = $row_edit['url_video'];

                        }

                        ?>

                        <div class="row"><!-- 2 row Starts -->

                            <div class="col-lg-12"><!-- col-lg-12 Starts -->

                                <div class="panel panel-default"><!-- panel panel-default Starts -->

                                    <div class="panel-heading"><!-- panel-heading Starts -->

                                        <h3 class="panel-title">

                                            <i class="fa fa-money fa-fw"></i> Editar Cursos

                                        </h3>

                                    </div><!-- panel-heading Ends -->

                                    <div class="panel-body"><!-- panel-body Starts -->

                                        <form class="form-horizontal" action="update.php?id_curso=<?php echo $edit_id; ?>" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Titulo </label>

                                                <div class="col-md-6" >

                                                    <input type="text" name="product_title" class="form-control" required value="<?php echo $p_title; ?>">

                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Trocar Imagem </label>

                                                <div class="col-md-6" >

                                                    <input type="file" name="product_img1" class="form-control" required >
                                                    <br><img src="../css/imagens/<?php echo $p_image1; ?>" width="70" height="70" >

                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Carga Horaria</label>

                                                <div class="col-md-6" >

                                                    <input type="text" name="product_c" class="form-control" required value="<?php echo $carga; ?>">

                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Instrutor</label>

                                                <div class="col-md-6" >

                                                    <input type="text" name="instrutor" class="form-control" required value="<?php echo $instrutor; ?>" >

                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Data Lancamento</label>

                                                <div class="col-md-6" >

                                                    <input type="text" name="data_lan" class="form-control" required value="<?php echo $lancamento; ?>" >

                                                </div>

                                            </div><!-- form-group Ends -->


                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" > Objetivo </label>

                                                <div class="col-md-6" >
                                                    <textarea name="obj" class="form-control" rows="6" cols="19" >
                                                    <?php echo $obj; ?>
                                                    </textarea>
                                                </div>

                                            </div><!-- form-group Ends -->


                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Publico Alvo </label>

                                                <div class="col-md-6" >

                                                    <textarea name="publico" class="form-control" rows="6" cols="19" >
                                                    <?php echo $alvo; ?>
                                                    </textarea>
                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Conteudo</label>

                                                <div class="col-md-6" >
                                                    <textarea name="conteudo" class="form-control" rows="6" cols="19" >
                                                    <?php echo $conteudo; ?>
                                                    </textarea>
                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" >Url do Video</label>

                                                <div class="col-md-6" >
                                                    <textarea name="video" class="form-control" rows="6" cols="19" >
                                                    <?php echo $url_video; ?>
                                                    </textarea>
                                                </div>

                                            </div><!-- form-group Ends -->

                                            <div class="form-group" ><!-- form-group Starts -->

                                                <label class="col-md-3 control-label" ></label>

                                                <div class="col-md-6" >

                                                    <input type="submit" name="atualizar_curso" value="atualizar produto" class="btn btn-primary form-control" >

                                                </div>

                                            </div><!-- form-group Ends -->

                                        </form><!-- form-horizontal Ends -->

                                    </div><!-- panel-body Ends -->

                                </div><!-- panel panel-default Ends -->

                            </div><!-- col-lg-12 Ends -->

                        </div><!-- 2 row Ends -->
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



    </body>
    </html>
<?php } ?>