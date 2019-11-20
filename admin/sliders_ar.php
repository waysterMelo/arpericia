
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
        <h2 class="pt-5"><i class="far fa-edit"></i> Slider Imagem 01</h2>
    </div>
    <div class="panel-body">
        <div class="table-responsive" style="border: 2px solid darkgreen">
            <table class="table table-striped table-md">
                <tbody>
                <tr>
                    <td>
                        <div class="col-md-12">
                            <?php
                            $sql = "select * from ar_slider limit 0,1";
                            $query = mysqli_query($con, $sql);
                            $rs = mysqli_fetch_array($query);
                            if ($rs > 0) {
                                $id_img = $rs['id_slider'];
                                $img = $rs['imagem'];
                                echo "<img src=\"../css/imagens/$img\" class=\"img-fluid img-thumbnail\" style='max-width: 300px; max-height: 200px;'>";
                            }else {
                                echo "Nao contem imagem";
                            }
                            ?>
                            <a href="delete_imagem.php?id_imagem=<?php echo $id_img ?>" id="alertDelete" class="btn btn-danger btn-sm" type="submit">Deletar</a>

                        </div>
                    </td>
                    <td>
                        <form class="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="slide_one">
                            </div>
                                <div class="col-md-6">
                                    <input class="btn btn-info" type="submit" name="salvar_img_one" value="cadastrar nova imagem"/>
                                </div>
                        </form>
                    </td>
                </tr>



                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="pt-5"><i class="far fa-edit"></i> Slider Imagem 02</h2>
    </div>
    <div class="panel-body">

        <div class="table-responsive" style="border: 2px solid darkgreen">
            <table class="table table-striped table-md">
                <tbody>
                <tr>
                    <td>
                        <div class="col-md-12">
                            <?php
                            $sql = "select * from ar_slider limit 1,2";
                            $query = mysqli_query($con, $sql);
                            $rs = mysqli_fetch_array($query);
                            if ($rs > 0) {
                                $id_img = $rs['id_slider'];
                                $img = $rs['imagem'];
                                echo "<img src=\"../css/imagens/$img\" class=\"img-fluid img-thumbnail\" style='max-width: 300px; max-height: 200px;'>";
                            }else {
                                echo "Nao contem imagem";
                            }
                            ?>
                            <a href="delete_imagem.php?id_imagem=<?php echo $id_img ?>" id="alertDelete" class="btn btn-danger btn-sm" type="submit">Deletar</a>

                        </div>
                    </td>
                    <td>
                        <form class="form" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="file" class="form-control-file" name="slide_two">
                            </div>
                            <div class="col-md-6">
                                <input class="btn btn-info" type="submit" name="salvar_img_two" value="cadastrar nova imagem"/>
                            </div>
                        </form>
                    </td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
    $sql = "select * from slider_titulo_ar";
    $query = mysqli_query($con, $sql);
    $rs = mysqli_fetch_array($query);
    $title_id = $rs['id'];
    $titulo = $rs['titulo'];

?>

<div class="container-fluid">
    <div class="row" >
        <div class="col-lg-12">

            <div class="panel panel-default">

                <div class="panel-heading" >

                    <h3 class="card-title pt-5" >

                        <i class="fas fa-edit"></i> Editar Titulo Slide

                    </h3>

                </div>

                <div class="panel-body">

                    <form class="form-horizontal" action="altera_titulo_sliders.php?title_id=<?php echo $title_id; ?>" method="post" enctype="multipart/form-data" >

                        <div class="form-group" >

                            <label class="col-md-3 control-label">Titulo do slide:</label>

                            <div class="col-md-6">

                                <input type="text" name="titulo" class="form-control" value="<?php echo $titulo; ?>">

                            </div>

                        </div>

                        <div class="form-group" >

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="update_title" value="Atualizar" class=" btn btn-primary form-control" >

                            </div>

                        </div>


                    </form>

                </div>


            </div>
        </div>
    </div>
</div>


<?php } ?>




<?php

if(isset($_POST['salvar_img_one'])){

    $slide_image = $_FILES['slide_one']['name'];

    $temp_name = $_FILES['slide_one']['tmp_name'];

    $view_slides = "select * from ar_slider";

    $view_run_slides = mysqli_query($con,$view_slides);

    $count = mysqli_num_rows($view_run_slides);

    if($count<2){

        move_uploaded_file($temp_name,"../css/imagens/$slide_image");

        $insert_slide = "insert into ar_slider (imagem) values ('$slide_image')";

        $run_slide = mysqli_query($con,$insert_slide);

        echo "<script>alert('IMAGEM CADASTRADA COM SUCESSO')</script>";

        echo "<script>window.open('painel.php?sliders_ar', '_self')</script>";

    }
    else {
        echo "<script>alert('VOCE JA TEM IMAGEMS CADASTRADAS')</script>";

    }

}


?><!-- insert img 1 -->
<?php

if(isset($_POST['salvar_img_two'])){

    $slide_image = $_FILES['slide_two']['name'];

    $temp_name = $_FILES['slide_two']['tmp_name'];

    $view_slides = "select * from ar_slider";

    $view_run_slides = mysqli_query($con,$view_slides);

    $count = mysqli_num_rows($view_run_slides);

    if($count<2){

        move_uploaded_file($temp_name,"../css/imagens/$slide_image");

        $insert_slide = "insert into ar_slider (imagem) values ('$slide_image')";

        $run_slide = mysqli_query($con,$insert_slide);

        echo "<script>alert('IMAGEM CADASTRADA COM SUCESSO')</script>";

        echo "<script>window.open('painel.php?sliders_ar', '_self')</script>";

    }
    else {
        echo "<script>alert('VOCE JA TEM IMAGEMS CADASTRADAS')</script>";

    }

}


?><!-- insert img 2 -->

