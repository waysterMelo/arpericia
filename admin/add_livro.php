
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row"><!-- 2 row Starts -->

                    <div class="col-lg-12"><!-- col-lg-12 Starts -->

                        <div class="panel panel-default"><!-- panel panel-default Starts -->

                            <div class="panel-heading"><!-- panel-heading Starts -->

                                <h3 class="panel-title">

                                    <i class="fa fa-money fa-fw"></i> Adicionar Livro

                                </h3>

                            </div><!-- panel-heading Ends -->

                            <div class="panel-body"><!-- panel-body Starts -->

                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Titulo </label>

                                        <div class="col-md-6" >
                                            <input type="text" name="titulo" class="form-control" required>
                                        </div>
                                    </div><!-- form-group Ends -->
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Paginas </label>

                                        <div class="col-md-2" >

                                            <input type="text" name="pagina" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Preco </label>

                                        <div class="col-md-2" >

                                            <input type="text" name="preco" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Autor</label>

                                        <div class="col-md-3" >

                                            <input type="text" name="autor" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >ISBN</label>

                                        <div class="col-md-3" >

                                            <input type="text" name="isbn" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->
                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Editora</label>

                                        <div class="col-md-3" >

                                            <input type="text" name="editora" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Conteudo</label>

                                        <div class="col-md-3" >

                                            <textarea type="text" name="conteudo" class="form-control" required></textarea>

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Objetivo</label>

                                        <div class="col-md-3" >

                                            <textarea type="text" name="obj" class="form-control" required></textarea>

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Sumario</label>

                                        <div class="col-md-3" >

                                            <textarea type="text" name="sumario" class="form-control"></textarea>

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Imagem </label>

                                        <div class="col-md-6" >

                                            <input type="file" name="img" class="form-control" required >

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Edicao</label>

                                        <div class="col-md-6" >

                                            <input type="text" name="edicao" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Publico Alvo </label>

                                        <div class="col-md-6" >
                                            <textarea name="publico" class="form-control" rows="6" cols="19" ></textarea>
                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Url do Video</label>

                                        <div class="col-md-6" >
                                                    <textarea name="video" class="form-control" rows="6" cols="19" ></textarea>
                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                        <div class="col-md-6" >

                                            <input type="submit" name="save_book" value="cadastrar" class="btn btn-primary form-control" >

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

    <?php

    if(isset($_POST['save_book'])){

        $title = $_POST['titulo'];
        $img  =  $_FILES['img']['name'];
        $pagina = $_POST['pagina'];
        $instrutor = $_POST['autor'];
        $isbn = $_POST['isbn'];
        $editora = $_POST['editora'];
        $conteudo = $_POST['conteudo'];
        $obj = $_POST['obj'];
        $video = $_POST['video'];
        $sumario = $_POST['sumario'];
        $edicao = $_POST['edicao'];
        $publico = $_POST['publico'];
        $preco = $_POST['preco'];

        $temp_img = $_FILES['img']['tmp_name'];

        move_uploaded_file($temp_img, "../css/imagens/$img");

        $sql = "insert into livros (titulo, img, autor, edicao, editora, objetivo, publico, conteudo, isbn, paginas, sumario, video, price) values ('$title','$img','$instrutor','$edicao','$editora',
    '$obj','$publico','$conteudo', '$isbn', '$pagina', '$sumario', '$video', '$preco')";

        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('Livro inserido com Sucesso')</script>";
            echo "<script>window.open('painel.php?edit_livro', '_self')</script>";
        }else {
            echo "<script>alert('Erro ao inserir curso')</script>";
           echo "<script>window.open('painel.php?edit_livro', '_self')</script>";
        }
    }

}

?>


