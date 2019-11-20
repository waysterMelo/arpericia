<?php

include('includes/db.php');
include ('functions/functions.php');

?>

<?php

if (isset($_GET['curso_id'])) {

    $curso_id = $_GET['curso_id'];
    $sql = "select * from livros where id=$curso_id";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);
    $imgPrincipal = $row['img'];
    $title = $row['titulo'];
    $autor = $row['autor'];
    $sumario = $row['sumario'];
    $paginas = $row['paginas'];
    $edicao = $row['edicao'];
    $editora = $row['editora'];
    $video = $row['video'];
    $price = $row['price'];
    $obj = $row['objetivo'];
    $publico = $row['publico'];

}

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
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/lightbox.min.css">

</head>
<body>



<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation">
                <nav class="navbar navbar-expand-sm navbar-default" style="border: 2px solid darkgreen;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
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
                                <a class="nav-link" href="videos.php" role="button" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="materias_diversos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Materiais Diversos
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php" role="button" aria-haspopup="true"
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


<section class="section">
    <div class="container-fluid">
        <div class="row">
            <aside class="col-lg-4 order-lg-1 order-2">
                <!-- overview -->
                <div class="p-4 rounded border mb-50" style="border: 2px solid darkgreen;">
                    <ul class="pl-0 mb-20">
                        <li class="py-3 border-bottom text-center">
                            <?php

                            if (isset($_GET['curso_id'])){
                                $curso_id = $_GET['curso_id'];

                                $get_curso = "select * from livros where id='$curso_id'";
                                $query_curso = mysqli_query($con, $get_curso);
                                while ($rs = mysqli_fetch_array($query_curso)){
                                    $titulo = $rs['titulo'];
                                    $paginas = $rs['paginas'];
                                    $instrutor = $rs['autor'];
                                    $editora =  $rs['editora'];
                                    $isbn = $rs['isbn'];
                                    $price = $rs['price'];

                                    echo "<span class=\"d-inline-block mr-3 font-weight-bold \" ></span><h5>$titulo</h5></li>";
                                    echo "<li class=\"py-3 border-bottom\">
                                            <span class=\"d-inline-block font-weight-bold  mr-2\">Paginas:</span> $paginas</li>";
                                    echo "<li class=\"py-3 border-bottom text-left\">
                                             <span class=\"d-inline-block font-weight-bold text-success mr-2\">Instrutor:</span>$instrutor</li> ";

                                    echo "<li class=\"py-3 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold  mr-2\">Editora:</span>$editora</li>";
                                    echo "<li class=\"py-4 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold  mr-2\">Isbn:</span>$isbn</li>";

                                    echo "<li class=\"py-4 border-bottom\">
                                                <span class=\"d-inline-block font-weight-bold mr-2\">Valor:</span><span class='font-weight-bold text-danger'>R$ $price</span><span class='font-weight-bold text-danger'>0</span></li>";
                                }

                            }

                            ?>
                    </ul>
                    <div class="col-md-12">
                        <?php


                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $img = $rs['img'];

                                echo "<img src='css/imagens/$img' class='img-thumbnail img-fluid'>   ";
                            }
                        }

                        ?>
                    </div>

                    <!-- case study -->

                    <!-- Consultation -->
                    <div class="" style="margin-top: 100px">
                        <h4 class="mb-20">Saiba mais entre em contato</h4>
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
                            <textarea name="question" id="question" class="form-control p-2" placeholder="Qual a duvida ? ..."
                                      style="height: 150px;"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button class="btn btn-primary" type="submit" value="send">Enviar</button>
                            </div>
                        </form>
                    </div>
            </aside>
            <!-- project content -->
            <div class="col-lg-8 order-lg-2 order-2">
                <?php

                if (isset($_GET['curso_id'])){
                    $curso_id = $_GET['curso_id'];

                    $get_curso = "select * from livros where id='$curso_id'";
                    $query_curso = mysqli_query($con, $get_curso);
                    while ($rs = mysqli_fetch_array($query_curso)){
                        $video = $rs['video'];

                        echo "<div id='video'>$video</div>";
                        echo " <h2 class=\"mb-10 pt-3\">Formas de Pagamento</h2>";}

                }

                ?>
                <div class="jumbotron jumbotron">
                    <?php
                    include('../includes/db.php');
                    $sql = "select * from pagamento_livros";
                    $query = mysqli_query($con, $sql);
                    $rs = mysqli_fetch_array($query);
                    $option1 = nl2br($rs['opcao1']);
                    $option2 = nl2br($rs['opcao2']);
                    $entrega = nl2br($rs['entrega']);
                    $info = nl2br($rs['info']);
                    ?>
                    <div class="" style="margin-top: -40px;">
                        <p class="">
                            <?php echo $option1;?>
                        </p>
                    <hr>
                    <hr>
                    <p>
                        <?php echo $option2;?>
                    </p>
                    <hr>
                    <p>
                        <?php echo $entrega;?>
                    </p>
                    <hr>
                        <hr>
                        <p>
                            <?php echo $info;?>
                        </p>
                </div>

                <!-- nav tabs menu -->
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link btn btn-success" id="challanges-tab" data-toggle="tab" href="#obj" role="tab"
                           aria-controls="challanges" aria-selected="true">Objetivo do Curso</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success " id="challanges-tab" data-toggle="tab" href="#challanges" role="tab"
                           aria-controls="challanges" aria-selected="true">Publico Alvo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success " id="solution-tab" data-toggle="tab" href="#solution" role="tab"
                           aria-controls="solution" aria-selected="false">Conteudo do Livro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success " id="solution-tab" data-toggle="tab" href="#sumario" role="tab"
                           aria-controls="solution" aria-selected="false">Sumario</a>
                    </li>

                </ul>
                <!-- tab content -->
                <div class="tab-content" id="myTabContent">
                    <!-- tab 1 -->
                    <div class="tab-pane fade show active" id="obj" role="tabpanel" aria-labelledby="challanges-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            while ($rs = mysqli_fetch_array($query_curso)) {
                                $obj = $rs['objetivo'];

                                echo " <p>
                                          $obj
                                        </p>";
                            }
                        }

                        ?>
                    </div>
                    <!-- tab 1 -->
                    <div class="tab-pane fade show" id="challanges" role="tabpanel" aria-labelledby="challanges-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            $rs = mysqli_fetch_array($query_curso);
                                $public = $rs['publico'];
                        }
                        ?>
                        <p><?php echo nl2br($publico); ?><p>
                    </div>
                    <!-- tab 2 -->
                    <div class="tab-pane fade" id="solution" role="tabpanel" aria-labelledby="solution-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            $rs = mysqli_fetch_array($query_curso);
                            $conteudo_programatico = nl2br($rs['conteudo']);

                        }
                        ?>

                        <p><?php echo $conteudo_programatico; ?><p>

                    </div>

                    <div class="tab-pane fade" id="sumario" role="tabpanel" aria-labelledby="solution-tab">
                        <?php

                        if (isset($_GET['curso_id'])) {
                            $curso_id = $_GET['curso_id'];

                            $get_curso = "select * from livros where id='$curso_id'";
                            $query_curso = mysqli_query($con, $get_curso);
                            $rs = mysqli_fetch_array($query_curso);
                                $sumario = nl2br($rs['sumario']);

                        }
                        ?>
                        <p><?php echo $sumario; ?></p>

                    </div>

                </div>
            </div>

        </div>


    </div>
</section>


<?php include('includes/footer.php') ?>
