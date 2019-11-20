<?php

include ('includes/db.php');
include ('functions/functions.php');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livros</title>
    <link rel="icon" href="css/imagens/home.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);">

<div class="header-logo-area bg-success">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-4">
                <div class="header_img">
                    <?php
                    $sql = "select * from pagina_livros";
                    $query = mysqli_query($con, $sql);
                    $rs = mysqli_fetch_array($query);
                    $imagem = $rs['img_logo'];
                    $title = $rs['titulo'];
                    ?>
                    <img src="css/imagens/<?php echo $imagem; ?>" class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-8">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-lg-6 col-xl-6 d-none d-sm-block">
                        <div class="header-logo-address">
                            <div class="header-logo-icon"><i class="fa fa-phone-square iconAdjust1 ml-5"></i> </div>
                            <div class="header-logo-text font-weight-bold text-center">
                                <?php
                                $sql = "select * from pagina_livros ";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $tel1 = $rs['tel1']
                                ?>
                                <p><?php echo $tel1;?></p>
                                <?php
                                $sql = "select * from pagina_livros";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $tel2 = $rs['tel2']
                                ?>
                                <p><?php echo $tel2;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-lg-6 col-xl-6 d-none d-sm-block">
                        <div class="header-logo-address">
                            <div class="header-logo-icon"> <i class="fa fa-envelope ml-2"></i> </div>
                            <div class="header-logo-text iconAdjust2 font-weight-bold text-center">
                                <?php
                                $sql = "select * from pagina_livros";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $email = $rs['email1']
                                ?>
                                <p><?php echo $email; ?></p>
                                <?php
                                $sql = "select * from pagina_livros";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $email = $rs['email2']
                                ?>
                                <p><?php echo $email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Logo Area End -->


<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation">
                <nav class="navbar navbar-expand-sm navbar-default" style="border: 2px solid darkgreen;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item">
                                <a class="nav-link" href="index.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    AR Pericia
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="arletreinamentos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Cursos e Treinamentos
                                </a>

                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Galeria
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="videos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="materias_diversos.php" role="button"  aria-haspopup="true"
                                   aria-expanded="false">
                                    Materiais Diversos
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php" role="button"  aria-haspopup="true"
                                   aria-expanded="false">
                                    Contato
                                </a>

                            </li>
                            <li class="nav-item">
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<?php
    $sql = "select * from pagina_livros";
    $query = mysqli_query($con, $sql);
    $rs = mysqli_fetch_array($query);
    $img_deep = $rs['img_deep'];
?>
<div class="container-fluid" style="background-image: url('css/imagens/<?php echo $img_deep; ?>'); background-size: cover; height: 250px; background-attachment: fixed;">
        <h1 class="text-center text-white pt-5 font-weight-bold "><?php echo  $title; ?></h1>
    <ul class="page-breadcrumb" style="margin-top: 60px">
                    <li><a href="index.php">Home</a></li>
                    <li>cursos e treinamentos</li>
                    <li>livros</li>
                </ul>
</div>

<!-- service -->
<section class="section" style="margin-top: 0px;" id="cursos">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center" data-aos="zoom-in-up" data-aos-duration="2000">
                <h5 class="section-title-sm">ARLE Cursos e Treinamentos</h5>
                <h2 class="section-title section-title-border">Livros</h2>
            </div>
            <!-- service item -->
            <?php

            $sql = "select * from livros";
            $query = mysqli_query($con,$sql);
            while($result=mysqli_fetch_array($query)){
                $id = $result['id'];
                $titulo = $result['titulo'];
                $img = $result['img'];
                $preview = $result['objetivo'];

                echo "
            
                 <div class=\"col-lg-4 col-sm-6 mb-5 mb-lg-0\" data-aos='zoom-in-down' data-aos-duration='2000'>
                <div class=\"card text-center\">
                    <h3 class=\"card-title pt-3\" style='min-height: 85px; max-height: 85px; overflow: auto'>$titulo</h3>
                    <div class=\"card-img-wrapper\">
                        <img class=\"card-img-top rounded-0 img-fluid\" src=\"css/imagens/$img\" alt=\"service-image\"
                          style='min-height: 250px; max-height: 250px; overflow: auto'>
                    </div>
                    <div class=\"card-body\">
                        <i class=\"square-icon translateY-33\">
                            <i class=\" py-2 fas fa-briefcase my-auto\"></i>
                        </i>
                        <p class=\"card-text mx-2 mb-0\"  style='min-height: 100px; max-height: 100px; overflow: auto'>
                            $preview
                        </p>
                        <div class='see-more-btn'>
                           <a style='border: 2px solid darkgreen' href=\"book_details.php?curso_id=$id\" class=\"btn translateY-25\">mais detalhes</a>
                        </div>
                    </div>
                </div>
            </div> 
            
            ";
            }

            ?>
        </div>
    </div>
</section>


<?php include('includes/footer.php') ?>
