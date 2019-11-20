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

    <title>Meteriais Diversos</title>
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

<body style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);">


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

                            <li class="nav-item ">
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
                            <li class="nav-item active">
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

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotrom jumbotron-fluid" >


                      <table class="table table-bordered">
                               <thead>
                               <h1 class="text-white"  style="background-color: #242c42">Documentos</h1>
                               </thead>
                       <tbody>
                       <?php

                       $per_page = 10;
                       if (isset($_GET['page'])){
                           $page = $_GET['page'];
                       }else {
                           $page = 1;
                       }

                       $start_from = ($page-1) * $per_page;
                       $sql = "select * from categorias_materials order by 1 limit $start_from, $per_page";
                       $query = mysqli_query($con, $sql);
                       while($rs = mysqli_fetch_array($query)){
                           $title = $rs['title'];
                           $descricao = $rs['descricao'];
                           $download =$rs['url'];


                       ?>

                       <tr>
                           <th scope="row"><i class="fas fa-book fa-2x mt-4"></i></th>
                           <td>
                              <span><?php echo $title ?></span>
                               <p><?php echo $descricao ?></p>
                           </td>
                           <td>
                               <a href='<?php echo $download ?>' target='_blank'><button class='btn btn-success btn-md'><span class="mx-4">acessar</span><i class="fas fa-file-download"></i></button></a>
                           </td>
                       </tr>

                       <?php } ?>
                       </tbody>
                   </table>

               <div class="col-md-12">
                   <div class="row pb-3">
                       <nav aria-label="Page navigation example" class="mx-auto">
                           <ul class="pagination border">
                               <?php
                                    $query = "select  * from  categorias_materials ";
                                    $result = mysqli_query($con, $query);
                                    $total_record = mysqli_num_rows($result);
                                    $total_pages = ceil($total_record / $per_page);

                                    echo  "
                                    <li class=\"page-item border\"><a class=\"page-link\" href=\"materias_diversos.php?page=1\">".'Primeira Pagina'."</a></li>";

                                    for ($i=1; $i <= $total_pages; $i++){
                                        echo "
                                            <li class='page-item border'><a class='page-link' href='materias_diversos.php?page=".$i."'>".$i."</a></li>";

                                    };

                                    echo "
                                      <li class=\"page-item border\"><a class=\"page-link\" href=\"materias_diversos.php?page=$total_pages\">".'Ultima Pagina'."</a></li>
                                    ";
                               ?>
                           </ul>
                       </nav>
                   </div>
               </div>


            </div>
        </div>

    </div>
</div>



<?php include('includes/footer.php') ?>