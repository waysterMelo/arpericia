<?php

include ('includes/db.php');
include ('functions/functions.php');


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes</title>
    <link rel="icon" href="css/imagens/home.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>
</head>
<body>


<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation">
                <nav class="navbar navbar-expand-sm navbar-default my-4" style="border: 2px solid darkgreen;">
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
                            <li class="nav-item ">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="videos.php" role="button" data-toggle="dropdown" aria-haspopup="true"
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




<section class="page-title overlay" style="background-image: url(css/imagens/tela.png);" id="titulo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
               <?php

               if (isset($_GET['curso_id'])){
                   $curso_id = $_GET['curso_id'];

                   $get_curso = "select * from cursos where id_cursos='$curso_id'";
                   $query_curso = mysqli_query($con, $get_curso);
                   while ($rs = mysqli_fetch_array($query_curso)){
                       $id_curso = $rs['id_cursos'];
                       $titulo = $rs['titulo'];
                       $img = $rs['img'];

                       echo "<h1 class=\"text-white font-weight-bold\">$titulo</h1>";
                   }

               }

              ?>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">
            <aside class="col-lg-4 order-lg-1 order-2">
                <!-- overview -->
                <div class="p-4 rounded border mb-50" style="border: 2px solid darkgreen;">
                    <h4 class="text-color mb-20 text-left">Informacoes</h4>
                    <ul class="pl-0 mb-20">
                        <li class="py-3 border-bottom text-center">
                            <?php

                            if (isset($_GET['curso_id'])){
                                $curso_id = $_GET['curso_id'];

                                $get_curso = "select * from cursos where id_cursos='$curso_id'";
                                $query_curso = mysqli_query($con, $get_curso);
                                while ($rs = mysqli_fetch_array($query_curso)){
                                    $titulo = $rs['titulo'];
                                    $carga_horaria = $rs['carga_horaria'];
                                    $instrutor = $rs['instrutor'];
                                    $lancamento =  $rs['lancamento'];
                                     $data = date('d/m/Y', strtotime($lancamento));

                                    echo "<span class=\"d-inline-block mr-3 font-weight-bold text-success\" ></span>$titulo</li>";
                                    echo "<li class=\"py-3 border-bottom\">
                                            <span class=\"d-inline-block font-weight-bold text-success mr-2\">Carga Horaria:</span>$carga_horaria horas</li>";
                                    echo "<li class=\"py-3 border-bottom text-left\">
                                             <span class=\"d-inline-block font-weight-bold text-success mr-2\">Instrutor:</span>$instrutor</li> ";

                                    echo "<li class=\"py-3 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold text-success mr-2\">Lancamento:</span>$data</li>";
                                }

                            }

                            ?>




                    </ul>
                    <div id="video" style="min-width: 300px; max-width: 300px; min-height: 300px; max-height: 300px;">
                            <?php


                            if (isset($_GET['curso_id'])) {
                                $curso_id = $_GET['curso_id'];

                                $get_curso = "select * from cursos where id_cursos='$curso_id'";
                                $query_curso = mysqli_query($con, $get_curso);
                                while ($rs = mysqli_fetch_array($query_curso)) {
                                    $video = $rs['url_video'];

                                    echo " <div>
                                          $video
                                        </div>";
                                }
                            }

                            ?>
                     </div>
                <!-- case study -->

                <!-- Consultation -->
                <div class="" style="margin-top: 100px">
                    <h4 class="pt-5">Entre Em Contato</h4>
                    <form action="#" class="row">
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required>
                        </div>
                        <div class="col-lg-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                   required>
                        </div>
                        <div class="col-lg-12">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto"
                                   required>
                        </div>
                        <div class="col-lg-12">
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Mensagem..."
                                      style="height: 150px;"></textarea>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-primary" type="submit" value="send">Enviar</button>
                        </div>
                    </form>
                </div>
            </aside>
            <!-- project content -->
            <div class="col-lg-8 order-lg-2">
                <?php

                if (isset($_GET['curso_id'])){
                    $curso_id = $_GET['curso_id'];

                    $get_curso = "select * from cursos where id_cursos='$curso_id'";
                    $query_curso = mysqli_query($con, $get_curso);
                    while ($rs = mysqli_fetch_array($query_curso)){
                        $img = $rs['img'];
                        $objetivo = $rs['objetivo'];

                        echo "<img style='min-width: 100%; max-height: 400px;' class=\"img-fluid mb-40 imgCursoLimite \" src=\"css/imagens/$img\" alt=\"project image\">";
                        echo " <h3 class=\"mt-5\">Objetivo do Curso</h3>
                                    <h5 class=\"mb-4\">$objetivo</h5>";
                    }

                }

                ?>

                <!-- nav tabs menu -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                            <a class="nav-link btn" id="challanges-tab" data-toggle="tab" href="#challanges" role="tab"
                               aria-controls="challanges" aria-selected="true">Publico Alvo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" id="solution-tab" data-toggle="tab" href="#solution" role="tab"
                           aria-controls="solution" aria-selected="false">Conteudo Programatico</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" style="background-color: #242c42;" id="results-tab" data-toggle="tab" href="#results" role="tab" aria-controls="results"
                           aria-selected="false">Metodologia</a>
                    </li>
                </ul>
                <!-- tab content -->
                <div class="tab-content" id="myTabContent">
                    <!-- tab 1 -->
                    <div class="tab-pane fade show active" id="challanges" role="tabpanel" aria-labelledby="challanges-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from cursos where id_cursos='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $public = $rs['publico_alvo'];

                                echo " <h6>
                                          $public
                                        </h6>";
                            }
                        }

                        ?>
                    </div>
                    <!-- tab 2 -->
                    <div class="tab-pane fade" id="solution" role="tabpanel" aria-labelledby="solution-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from cursos where id_cursos='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $conteudo_programatico = $rs['conteudo_programatico'];
                               $conteudo = nl2br($conteudo_programatico);

                                echo " <h6>
                                             $conteudo
                                                                                                                            
                                        </h6>";
                            }
                        }

                        ?>

                    </div>
                    <!-- tab 3 -->
                    <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from cursos where id_cursos='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            $rs = mysqli_fetch_array($query_curso);
                            $metodologia = $rs['metodologia'];
                        }
                        ?>
                        <?php echo $metodologia; ?>
                    </div>
                </div>
            </div>

        </div>


    </div>
</section>

<?php include('includes/footer.php') ?>