<?php
include ('includes/db.php');
include ('functions/functions.php');
?>
<?php
$sql = "select * from texto_sobreNos";
$query = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query);
$title_S = $rs['titulo'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>AR Pericia</title>
    <link rel="icon" href="css/imagens/home.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="css/coluna_box.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>

</head>

<?php
    $sql = "select * from img_fundo_ar";
    $query = mysqli_query($con,$sql);
    $rs = mysqli_fetch_array($query);
    $imgF = $rs['imagem'];
?>
<body style="background: #f3f3f3;">
<!--        style="background-image: url('css/imagens/--><?php //echo $imgF; ?><!--'); background-size: cover; background-attachment: fixed;"-->

<div class="header-logo-area bg-success">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-lg-5 col-md-4">
                <div class="header_img">
                    <?php
                    $sql = "select * from header_logo_ar";
                    $query = mysqli_query($con, $sql);
                    $rs = mysqli_fetch_array($query);
                    $imagem = $rs['imagem'];
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
                                    $sql = "select * from ar_pericia_telefones limit 0,1";
                                    $query = mysqli_query($con, $sql);
                                    $rs=mysqli_fetch_array($query);
                                     $tel1 = $rs['telefones']
                                ?>
                                <p><?php echo $tel1;?></p>
                                <?php
                                $sql = "select * from ar_pericia_telefones limit 1,2";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $tel2 = $rs['telefones']
                                ?>
                                <p><?php echo $tel2;?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-lg-6 col-xl-6 d-none d-sm-block">
                        <div class="header-logo-address">
                            <div class="header-logo-icon"><i class="fa fa-envelope ml-2"></i> </div>
                            <div class="header-logo-text iconAdjust2 font-weight-bold text-center">
                                <?php
                                $sql = "select * from ar_emails limit 0,1";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $email = $rs['email']
                                ?>
                                <p><?php echo $email; ?></p>
                                <?php
                                $sql = "select * from ar_emails limit 1,2";
                                $query = mysqli_query($con, $sql);
                                $rs=mysqli_fetch_array($query);
                                $email = $rs['email']
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
                    <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mx-auto"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item active">
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

                            <li class="nav-item">
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div><!--end navigation -->


<div class="container-fluid" id="getColum">
    <div class="row">
        <div class="col-md-9 col-sm-auto imgPrincipal">
            <?php

                $sql ="select * from img_principal_ar";
                $query = mysqli_query($con, $sql);
                while($result=mysqli_fetch_array($query)) {
                    $imgP = $result['imagem'];
                    echo "
                   <header class=\"jumbotron my-4\" style=\"background-image: url('css/imagens/$imgP'); background-size: cover;\">";
                    } ?><!-- return main image-->
            <?php
               $sql ="select * from textos_img_p limit 0,1";
                $query = mysqli_query($con, $sql);
                while($result=mysqli_fetch_array($query)) {
                    $texto1 = $result['texto'];
                    echo "<h1 class=\"display-2 text-light text-center font-weight-bold animated fadeInLeft delay-1s\"> $texto1 </h1>";}
            ?><!-- return texto 1 image-->
            <?php
            $sql ="select * from textos_img_p limit 1,2";
            $query = mysqli_query($con, $sql);
            while($result=mysqli_fetch_array($query)) {
                $texto1 = $result['texto'];
                echo "<h3 class=\"text-white mt-5 text-center animated fadeInLeft delay-1s\">$texto1</h3>";}
            ?><!-- return texto 2 image-->
            </header>

            <div class="container-fluid bg-light">
                <div class="panel panel-default">
                    <div class="container">
                        <h2><?php echo $title_S; ?></h2>
                        <div class="row">
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <p class="lead">
                                    <?php txtSobreNos();  ?>
                                </p>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 py-3">
                                <?php get_sobreImg();  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row" data-aos="slide-right" data-aos-duration="2000">
                    <div class="col-md-12 col-lg-12 col-xl-6 services bg-light">
                            <?php
                            $sql = "select * from coluna1";
                            $query = mysqli_query($db, $sql);
                            $row=mysqli_fetch_array($query);
                                $titleC = $row['titulo'];
                                $descricaoC = $row['descricao'];

                            ?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="panel-title text-center font-weight-bold"><h3><?php echo $titleC; ?></h3></div>
                            </div>
                            <div class="panel-body mx-auto mt-4">
                                <p class="text-muted"><?php echo nl2br($descricaoC); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 col-xl-6 services bg-light" data-aos="flip-left" data-aos-duration="2000">
                    <?php

                        $sql = "select * from slider_titulo_ar";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $titulo = $rs['titulo']; ?>
                        <h3 class="text-center my-2"><?php echo $titulo; ?></h3>
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <?php

                                $sql = "select * from ar_slider limit 0,1";
                                $query = mysqli_query($con, $sql);
                                $rs = mysqli_fetch_array($query);
                                $imagem = $rs['imagem'];

                                $sql1 = "select * from ar_slider limit 1,2";
                                $query1 = mysqli_query($con, $sql1);
                                $rs = mysqli_fetch_array($query1);
                                $imagem1 = $rs['imagem'];
                                ?>
                            <img class="d-block w-100 img-fluid img-thumbnail" src="css/imagens/<?php echo $imagem ?>" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 img-fluid img-thumbnail" src="css/imagens/<?php echo $imagem1 ?>" alt="Second slide">
                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
                </div>
            </div><!-- our office and services-->

        </div>

        <aside role="complementary" class="col-md-3 d-none d-sm-block news">
            <div class="trt3-cover-component trt3-cover-component-last-news box-padrao">
                <h2>
                    <span>Últimas Notícias</span>
                </h2>

                <?php
                $html ='';
                $url= 'http://www.tst.jus.br/web/guest/noticias/-/asset_publisher/89Dk/rss';
                $xml = simplexml_load_file($url);
                for ($i = 0; $i < 6; $i++){
                    $title = $xml->channel->item[$i]->title;
                    $description = $xml->channel->item[$i]->description;
                    $pubDate = $xml->channel->item[$i]->pubDate;
                    $dcdate = $xml->channel->item[$i]->dcdate;
                    $link = $xml->channel->item[$i]->link;

                    $html .= " <dl>
                        <div class=\"trt3-row-noticias\">
                            <dt class=\"trt3-data-noticias\">
                                $pubDate
                            </dt>

                            <dd class=\"trt3-label-noticias summary\">
                                <span class='font-weight-bold text-uppercase'>$title</span><a href='$link' target='_blank'><i class='fas fa-plus-square mx-2'></a></i> 
                            </dd>
                        </div>
                    </dl>
                 
                   ";}

                echo $html;

                ?>
                <p class="alinharDireita">
                    <a href="https://portal.trt3.jus.br/internet/conheca-o-trt/comunicacao" target="_blank" data-track-click-title="Últimas Notícias - [ MAIS NOTÍCIAS ]">
                        [ MAIS NOTÍCIAS ]
                    </a>
                </p>
            </div>
        </aside>
    </div>


<!-- Our Featured Wrapper Start -->
<div class="featured-wrapper">
    <div class="container-fluid">
        <div class="section-title">
            <h2 data-aos="fade-down-left" data-aos-duration="2000">Também trabalhamos com cursos e treinamentos</h2>
            <div class="separator"></div>
        </div>
        <div class="row" data-aos="fade-down-left" data-aos-duration="2000" data-aos-delay="1000">
            <?php
            ultimosCursos();
            ?>
        </div>
    </div>
</div>
<!-- Our Featured Wrapper Start -->




</div>
<?php include('includes/footer.php'); ?>