<?php
$sql = "select * from pagina_livros";
$query = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query);
$img_logo = $rs['img_logo'];
$tel1 = $rs['tel1'];
$tel2 = $rs['tel2'];
$email1 = $rs['email1'];
$email2 = $rs['email2'];
$title = $rs['titulo'];
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h3>Imagens e textos atuais</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-lg-4 col-md-10">
            <div class="text-center text-md-left ">
                <!-- logo -->
                <img src="../css/imagens/<?php echo $img_logo; ?>" alt="Logo" class="img-fluid img-thumbnail">
                <div class="form-group" style="margin-top: 10px;">
                    <label for="">telefone 1</label>
                    <input type="text" value="<?php echo $tel1; ?>">
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="">telefone 2</label>
                    <input type="text" value="<?php echo $tel2; ?>">
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="">Email 1</label>
                    <input type="text" value="<?php echo $email1; ?>">
                </div>
                <div class="form-group" style="margin-top: 10px;">
                    <label for="">Email 2</label>
                    <input type="text" value="<?php echo $email2; ?>">
                </div>
            </div>
        </div>

        <div class="col-lg-7 col-md-10"><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" >

                        <i class="fas fa-edit"></i> Alterar texto e imagem!

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->
                    <form class="form-horizontal" action="update.php" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Imagem</label>

                            <div class="col-md-6">

                                <input name="img_logo_book" class="form-control-plaintext" type="file"/>

                            </div>
                            <input type="submit" class="btn btn-success btn-md" name="save_logo_book" value="salvar imagem">
                        </div><!-- form-group Ends -->
                        <hr>
                        <hr>

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Telefone 1</label>

                            <div class="col-md-6">

                                <textarea name="tel1" class="form-control-plaintext" rows="2" cols="30"><?php echo $tel1; ?></textarea>

                            </div>

                        </div><!-- form-group Ends -->
                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Telefone 2</label>

                            <div class="col-md-6">

                                <textarea name="tel2" class="form-control-plaintext" rows="2" cols="30"><?php echo $tel2; ?></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Email 1</label>

                            <div class="col-md-6">

                                <textarea name="email1" class="form-control-plaintext" rows="2" cols="30"><?php echo $email1; ?></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Email 2</label>

                            <div class="col-md-6">

                                <textarea name="email2" class="form-control-plaintext" rows="2" cols="30"><?php echo $email2; ?></textarea>

                            </div>

                        </div><!-- form-group Ends -->


                        <div class="form-group " ><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <center><input type="submit" name="footer_save_textos" value="atualizar" class=" btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->


                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->


            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div>
</div>
<hr>
<hr>

<h2 class="pt-5">Imagem de fundo</h2>
<div class="table-responsive" style="border: 2px solid darkgreen">
    <table class="table table-striped table-md">
        <tbody>
        <tr>
            <?php
            $sql = "select * from pagina_livros";
            $query = mysqli_query($con, $sql);
            $rs = mysqli_fetch_array($query);
            if ($rs > 0) {
                $img = $rs['img_deep'];
                echo "<td>
                <img src='../css/imagens/$img'class='img-fluid' style='max-width: 200px; max-height: 200px;'>";
            } else {
                echo "sem imagem";
            }
            ?>
            <a href="delete_imagem.php?id_imagem_pericia=<?php echo $id_img_p ?>"
            </td>

            <td>
                <form class="form" action="update.php" method="post" enctype="multipart/form-data">
                    <!-- form-horizontal Starts -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label">Imagem:</label>

                        <div class="col-md-6">

                            <input type="file" name="book_logo_img" class="form-control-file">

                        </div>

                    </div><!-- form-group Ends -->

                    <div class="form-group"><!-- form-group Starts -->

                        <label class="col-md-3 control-label"></label>

                        <div class="col-md-6">

                            <input type="submit" name="save_img_bookLogo" value="atualizar"
                                   class=" btn btn-primary form-control">

                        </div>

                    </div><!-- form-group Ends -->


                </form><!-- form-horizontal Ends -->
            </td>


        </tr>
        <tr>
            <?php
            $sql = "select * from pagina_livros";
            $query = mysqli_query($con, $sql);
            $rs = mysqli_fetch_array($query);
            $texto = $rs['titulo'];
            ?>

            <form action="update.php" method="post" enctype="multipart/form-data">
                <td>
                    <textarea name="titulo_livros" cols="50"><?php echo $texto; ?></textarea>
                </td>
                <td>
                    <div class="row">
                        <button type="submit" class="btn btn-success btn-sm" name="save_title" value="Alterar">Alterar</button>
                    </div>
                </td>
            </form>
        </tr>

        </tbody>
    </table>
</div>