<?php
    include ('includes/db.php');
    include ('functions/functions.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> ARLE Cursos e Treinamentos</title>
    <link rel="icon" href="css/imagens/home.ico">


    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>


</head>
<?php
$sql = "select * from ct_imagemFundo";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
$imagem_ct = $row['imagem'];

echo "
<body style=\"background-image: url('css/imagens/$imagem_ct'); background-attachment: fixed; background-size: cover;\">
";
?>


<div class="bg-success">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-5 py-3" style="max-height: 200px;">
                <div class="header_img">
                    <?php
                    $sql = "select * from ct_header";
                    $query = mysqli_query($con, $sql);
                    $rs = mysqli_fetch_array($query);
                    $imagem = $rs['imagem'];
                    ?>
                    <img src="css/imagens/<?php echo $imagem; ?>" class="img-fluid img-thumbnail">
                </div>
            </div>
            <div class="col-xl-6 col-lg-7 py-5">
                <div class="row">
                    <?php
                    $sql = "select * from ct_header";
                    $query = mysqli_query($con, $sql);
                    $rs = mysqli_fetch_array($query);
                    $texto = $rs['texto'];
                    ?>
                    <p class="text-center font-weight-bold">
                       <?php echo $texto; ?>
                    </p>
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
                            <li class="nav-item active">
                                <a class="nav-link" href="arletreinamentos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Cursos e Treinamentos
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="videos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Galeria
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
</div><!--end navigation -->

<div class="breadcrumb-wrapper">
    <div class="container">
        <?php
        $sql = "select * from ct_about_us_txt";
        $query = mysqli_query($con, $sql);
        $rs = mysqli_fetch_array($query);
        $title = $rs['titulo'];
        $desc = $rs['descricao'];
        $sub = $rs['sub_title'];
        ?>
        <h1 data-aos="fade-right" data-aos-duration="2000"><?php echo $title; ?></h1>
        <div class="col-md-12" data-aos="slide-left" data-aos-duration="2000">
            <div class="testimonial-block sobre">
                <div class="inner-box bg-light">
                    <div class="image">
                        <?php
                                $sql  = "select * from ct_img_about";
                                $query = mysqli_query($con, $sql);
                                $row = mysqli_fetch_array($query);
                                $imagemCT = $row['imagem'];
                        ?>
                        <img src="css/imagens/<?php echo $imagemCT; ?>" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="author-info">
                            <h3 class="tst text-success">
                                <?php echo $sub; ?>
                            </h3>
                        </div>
                        <div class="text-dark texto_breadCrump">
                            <p>
                                <?php echo $desc; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- service -->
<section class="section" id="cursos">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center" data-aos="zoom-in-up" data-aos-duration="2000">
<!--                <h5 class="section-title-sm">ARLE</h5>-->
                <h2 class="section-title section-title-border text-white">CURSOS E TREINAMENTOS</h2>
            </div>
            <!-- service item -->
            <?php

                $sql = "select * from cursos";
                $query = mysqli_query($con,$sql);
               while($result=mysqli_fetch_array($query)){
                   $id = $result['id_cursos'];
                   $titulo = $result['titulo'];
                   $img = $result['img'];
                   $preview = $result['objetivo'];

                   echo "
            
                 <div class=\"col-lg-4 col-md-6 col-sm-6 mb-5 mb-lg-0\" data-aos='zoom-in-down' data-aos-duration='2000'>
                <div class=\"card text-center pb-5\">
                    <h4 class=\"card-title pt-3\">$titulo</h4>
                    <div class=\"card-img-wrapper\">
                        <img class=\"card-img-top rounded-0 img-fluid\" src=\"css/imagens/$img\" alt=\"service-image\">
                    </div>
                    <div class=\"card-body\">
                        <i class=\"square-icon translateY-33 rounded\">
                            <i class=\"fas fa-briefcase\"></i>
                        </i>
                        <p class=\"card-text mx-2 mb-1\">
                            $preview
                        </p>
                        <div class='see-more-btn'>
                           <a style='border: 2px solid darkgreen' href=\"detalhes_curso.php?curso_id=$id#titulo\" class=\"btn translateY-25\">mais detalhes</a>
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
