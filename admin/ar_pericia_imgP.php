<?php
include('../includes/db.php');
if (!isset($_SESSION["email"]) || !isset($_SESSION["senha"])) {

    header("Location: login.php");
    exit;
} else {
    ?>

    <?php include('../includes/db.php');
    include('../functions/functions.php'); ?>

    <h2 class="pt-5">Imagem Principal com textos</h2>
    <div class="table-responsive" style="border: 2px solid darkgreen">
        <table class="table table-striped table-md">
            <tbody>
            <tr>
                <?php
                $sql = "select * from img_principal_ar";
                $query = mysqli_query($con, $sql);
                $rs = mysqli_fetch_array($query);
                if ($rs > 0) {
                    $id_img_p = $rs['id'];
                    $img = $rs['imagem'];
                    echo "<td>
                <img src='../css/imagens/$img'class='img-fluid' style='max-width: 200px; max-height: 200px;'>";
                } else {
                    echo "sem imagem";
                }
                ?>
                <a href="delete_imagem.php?id_imagem_pericia=<?php echo $id_img_p ?>"
                   class="mx-auto my-2 btn btn-danger btn-sm">Remover</a>
                </td>

                <td>
                    <form class="form" action="" method="post" enctype="multipart/form-data">
                        <!-- form-horizontal Starts -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Imagem:</label>

                            <div class="col-md-6">

                                <input type="file" name="image_principal" class="form-control-file">

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group"><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="save_img_principal" value="cadastrar"
                                       class=" btn btn-primary form-control">

                            </div>

                        </div><!-- form-group Ends -->


                    </form><!-- form-horizontal Ends -->
                </td>


            </tr>
            <tr>
                <?php
                $sql = "select * from textos_img_p limit 0,1";
                $query = mysqli_query($con, $sql);
                $rs = mysqli_fetch_array($query);
                $id_t = $rs['id'];
                $texto = $rs['texto'];
                ?>

                <form action="update.php?change_txt_id=<?php echo $id_t; ?>" method="post" enctype="multipart/form-data">
                    <td>
                        <textarea name="texto_1"><?php echo $texto; ?></textarea>
                    </td>
                    <td>
                        <div class="row">
                            <button type="submit" class="btn btn-success btn-sm" name="alterar_t_one" value="Alterar">Alterar</button>
                        </div>
                    </td>
                </form>
            </tr>

            <tr>
                <?php
                $sql = "select * from textos_img_p limit 1,2";
                $query = mysqli_query($con, $sql);
                $rs = mysqli_fetch_array($query);
                $id_t = $rs['id'];
                $texto = $rs['texto'];
                ?>
                <form action="update.php?change_txt2_id=<?php echo $id_t; ?>" method="post" enctype="multipart/form-data">
                    <td>
                        <textarea name="texto_2"><?php echo $texto; ?></textarea>
                    </td>

                    <td>
                        <div class="row">
                            <button type="submit" class="btn btn-success btn-sm" name="alterar_t_two" value="Alterar">Alterar</button>
                        </div>
                    </td>
                </form>
            </tr>
            <hr>
            </tbody>
        </table>
    </div>

<?php } ?>


<?php

if (isset($_POST['save_img_principal'])) {

    $slide_image = $_FILES['image_principal']['name'];

    $temp_name = $_FILES['image_principal']['tmp_name'];

    $view_slides = "select * from img_principal_ar";

    $view_run_slides = mysqli_query($con, $view_slides);

    $count = mysqli_num_rows($view_run_slides);

    if ($count < 1) {

        move_uploaded_file($temp_name, "../css/imagens/$slide_image");

        $insert_slide = "insert into img_principal_ar(imagem) values ('$slide_image')";

        $run_slide = mysqli_query($con, $insert_slide);

        echo "<script>alert('IMAGEM CADASTRADA COM SUCESSO')</script>";

        echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

    } else {
        echo "<script>alert('VOCE JA TEM IMAGEMS CADASTRADAS')</script>";

    }

}


?><!-- insert imagem sobre -->
