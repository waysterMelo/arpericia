
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {
    ?>

    <?php include ('../includes/db.php');
    include ('../functions/functions.php');?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title">
                <h3>Titulo</h3>
            </div>
        </div>
        <div class="panel-body">
                <div class="col-lg-12 pt-5" style="margin-top: 20px;"><!-- col-lg-12 Starts -->

                            <?php
                            $sql = "select * from texto_sobreNos";
                            $query = mysqli_query($con, $sql);
                            $rs = mysqli_fetch_array($query);
                            $id = $rs['id'];
                            $titulo = $rs['titulo'];
                            ?>
                            <form class="form-inline" action="update.php" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label">Titulo</label>

                                    <div class="col-md-6">

                                        <textarea name="titulo1" class="form-control-plaintext" rows="5" cols="50"><?php echo $titulo; ?></textarea>

                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label"></label>

                                    <div class="col-md-3">

                                        <input type="submit" name="atualizar_title1" value="atualizar" class=" btn btn-success form-control" >

                                    </div>

                                </div><!-- form-group Ends -->


                            </form><!-- form-horizontal Ends -->

                        </div><!-- panel-body Ends -->


                    </div><!-- panel panel-default Ends -->

                </div><!-- col-lg-12 Ends -->

    <div class="panel panel-default">
        <div class="panel-heading" ><!-- panel-heading Starts -->

            <div class="panel-title">

                <h3><i class="far fa-newspaper"></i> Imagem</h3>

            </div>

        </div><!-- panel-heading Ends -->
        <div class="panel-body">
            <div class="table-responsive" style="border: 2px solid darkgreen">
                <table class="table table-striped table-md">
                    <tbody>
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <?php
                                $sql = "select * from sobreNos";
                                $query = mysqli_query($con, $sql);
                                $rs = mysqli_fetch_array($query);
                                if ($rs > 0) {
                                    $id_img = $rs['id'];
                                    $img = $rs['imagem_sobre'];
                                    echo "<img src=\"../css/imagens/$img\" class=\"img-fluid img-thumbnail\" style='max-width: 300px; max-height: 200px;'>";
                                }else {
                                    echo "Nao contem imagem";
                                }
                                ?>
                                <a href="delete_imagem.php?id_imagem_sobre=<?php echo $id_img ?>" id="alertDelete" class="btn btn-danger btn-sm" type="submit">Deletar</a>

                            </div>
                        </td>

                        <td>
                            <form class="form" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label">Imagem:</label>

                                    <div class="col-md-6">

                                        <input type="file" name="slide_image" class="form-control-file" >

                                    </div>

                                </div><!-- form-group Ends -->

                                <div class="form-group" ><!-- form-group Starts -->

                                    <label class="col-md-3 control-label"></label>

                                    <div class="col-md-6">

                                        <input type="submit" name="save_img" value="cadastrar" class=" btn btn-primary form-control" >

                                    </div>

                                </div><!-- form-group Ends -->


                            </form><!-- form-horizontal Ends -->
                        </td>
                    </tr>
                    <hr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-12 pt-5" style="margin-top: 20px;"><!-- col-lg-12 Starts -->

        <div class="panel panel-default" ><!-- panel panel-default Starts -->

            <div class="panel-heading" ><!-- panel-heading Starts -->

                <h3 class="card-title" >

                    <i class="fas fa-edit"></i> Alterar texto

                </h3>

            </div><!-- panel-heading Ends -->

            <div class="panel-body" ><!-- panel-body Starts -->

                <?php
                        $sql = "select * from texto_sobreNos";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $id = $rs['id'];
                        $textoS = $rs['texto'];
                ?>
                <form class="form-horizontal" action="altera_titulo_sliders.php?id_sobre_texto=<?php echo $id; ?>" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Texto</label>

                        <div class="col-md-6">

                            <textarea name="texto_sobre" class="form-control-plaintext" rows="5" cols="50"><?php echo $textoS; ?></textarea>

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group" ><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="atualizar_sobreNos" value="atualizar" class=" btn btn-primary form-control" >

                        </div>

                    </div><!-- form-group Ends -->


                </form><!-- form-horizontal Ends -->

            </div><!-- panel-body Ends -->


        </div><!-- panel panel-default Ends -->

    </div><!-- col-lg-12 Ends -->



<?php } ?>


<?php

if(isset($_POST['save_img'])){

    $slide_image = $_FILES['slide_image']['name'];

    $temp_name = $_FILES['slide_image']['tmp_name'];

    $view_slides = "select * from sobreNos";

    $view_run_slides = mysqli_query($con,$view_slides);

    $count = mysqli_num_rows($view_run_slides);

    if($count<1){

        move_uploaded_file($temp_name,"../css/imagens/$slide_image");

        $insert_slide = "insert into sobreNos(imagem_sobre) values ('$slide_image')";

        $run_slide = mysqli_query($con,$insert_slide);

        echo "<script>alert('IMAGEM CADASTRADA COM SUCESSO')</script>";

        echo "<script>window.open('painel.php?sobre_ar', '_self')</script>";

    }
    else {
        echo "<script>alert('VOCE JA TEM IMAGEMS CADASTRADAS')</script>";

    }

}


?><!-- insert imagem sobre -->

