
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

                                <i class="fa fa-money fa-fw"></i> Adicionar Cursos

                            </h3>

                        </div><!-- panel-heading Ends -->

                        <div class="panel-body"><!-- panel-body Starts -->

                            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Titulo </label>

                                    <div class="col-md-6" >

                                        <input type="text" name="product_title" class="form-control" required>

                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Imagem </label>

                                    <div class="col-md-6" >

                                        <input type="file" name="product_img1" class="form-control" required >

                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Carga Horaria</label>

                                    <div class="col-md-6" >

                                        <input type="text" name="product_c" class="form-control" required">

                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Instrutor</label>

                                    <div class="col-md-6" >

                                        <input type="text" name="instrutor" class="form-control" required">

                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Data Lancamento</label>

                                    <div class="col-md-6" >

                                        <input type="text" id="datepicker" name="data_lan" class="form-control" required>

                                    </div>

                                </div><!-- form-group Ends -->


                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" > Objetivo </label>

                                    <div class="col-md-6" >
                                                    <textarea name="obj" class="form-control" rows="6" cols="19" >
                                                    </textarea>
                                    </div>

                                </div><!-- form-group Ends -->


                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Publico Alvo </label>

                                    <div class="col-md-6" >

                                                    <textarea name="publico" class="form-control" rows="6" cols="19" >
                                                    </textarea>
                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Conteudo</label>

                                    <div class="col-md-6" >
                                                    <textarea name="conteudo" class="form-control" rows="6" cols="19" >
                                                    </textarea>
                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" >Url do Video</label>

                                    <div class="col-md-6" >
                                                    <textarea name="video" class="form-control" rows="6" cols="19" >
                                                    </textarea>
                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label" ></label>

                                    <div class="col-md-6" >

                                        <input type="submit" name="save_curso" value="cadastrar" class="btn btn-primary form-control" >

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

if(isset($_POST['save_curso'])){

    $title = $_POST['product_title'];
    $img  =  $_FILES['product_img1']['name'];
    $carga = $_POST['product_c'];
    $instrutor = $_POST['instrutor'];
    $data_lan = $_POST['data_lan'];
    $obj = $_POST['obj'];
    $publico = $_POST['publico'];
    $conteudo = $_POST['conteudo'];
    $video = $_POST['video'];

    $temp_img = $_FILES['product_img1']['tmp_name'];

    move_uploaded_file($temp_img, "../css/imagens/$img");

    $sql = "insert into cursos (titulo, img, carga_horaria, instrutor, 
    lancamento, objetivo, publico_alvo, conteudo_programatico, url_video) values ('$title','$img','$carga','$instrutor','$data_lan',
    '$obj','$publico','$conteudo','$video')";

    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('Curso inserido com Sucesso')</script>";
        echo "<script>window.open('painel.php?edit_cursos', '_self')</script>";
    }else {
        echo "<script>alert('Erro ao inserir curso')</script>";
//        echo "<script>window.open('painel.php?add_cursos', '_self')</script>";
        echo mysqli_error($con);
    }
}

}

?>


