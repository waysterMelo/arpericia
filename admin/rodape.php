<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h3>Imagem e texto atual lado esquerdo</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-lg-4 col-md-10">
            <div class="text-center text-md-left ">
                <?php
                $sql = "select * from footer_img1";
                $query = mysqli_query($con, $sql);
                $rs = mysqli_fetch_array($query);
                $id = $rs['id'];
                $img = $rs['imagem'];
                $text = $rs['text'];


                ?>
                <!-- logo -->
                <img src="../css/imagens/<?php echo $img; ?>" alt="Logo" class="img-fluid img-thumbnail">
                <p class="text-dark">
                    <?php  echo $text; ?>
                </p>
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

                                <input name="img_footer" class="form-control-plaintext" type="file"/>

                            </div>
                            <input type="submit" class="btn btn-success btn-md" name="save_img1" value="salvar imagem">
                        </div><!-- form-group Ends -->
                        <hr>
                        <hr>

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Texto</label>

                            <div class="col-md-6">

                                <textarea name="texto_footer" class="form-control-plaintext" rows="5" cols="50"></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group " ><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                               <center><input type="submit" name="footer_save" value="atualizar" class=" btn btn-primary form-control" >

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
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h3>Imagem e texto atual lado direito</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-lg-4 col-md-10">
            <div class="text-center text-md-left ">
                <?php
                $sql = "select * from footer_img2";
                $query = mysqli_query($con, $sql);
                $rs = mysqli_fetch_array($query);
                $id = $rs['id'];
                $img = $rs['imagem'];
                $text = $rs['texto'];


                ?>
                <!-- logo -->
                <img src="../css/imagens/<?php echo $img; ?>" alt="Logo" class="img-fluid img-thumbnail">
                <p class="text-dark">
                    <?php  echo $text; ?>
                </p>
            </div>
        </div>

        <div class="col-lg-8 col-md-10"><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" >

                        <i class="fas fa-edit"></i> Alterar texto e imagem!

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->
                    <form class="form-horizontal" action="update.php?footer2=<?php echo $id; ?>" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Imagem</label>

                            <div class="col-md-6">

                                <input name="img_footer2" class="form-control-plaintext" type="file"/>

                            </div>
                            <input type="submit" name="save_img2" class="btn btn-success btn-md" value="salvar imagem">
                        </div><!-- form-group Ends -->
                        <hr>
                        <hr>

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Texto</label>

                            <div class="col-md-6">

                                <textarea name="texto_footer2" class="form-control-plaintext" rows="5" cols="50"></textarea>

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group " ><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <center><input type="submit" name="footer_save2" value="atualizar" class=" btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->


                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->


            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h3>inserir link para redes social</h3>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-lg-4">
            <center><i class="fab fa-facebook fa-4x"></i><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <textarea name="link_face" cols="20" rows="4"></textarea> <br>
                    <button name="save_face" type="submit" class="btn btn-primary">inserir</button>
                </form>
        </div>
        <div class="col-lg-4">
            <center><i class="fab fa-instagram fa-4x"></i><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <textarea name="link_insta" cols="20" rows="4"></textarea> <br>
                    <button name="save_insta" type="submit" class="btn btn-primary">inserir</button>
                </form>
        </div>
        <div class="col-lg-4">
            <center><i class="fab fa-linkedin fa-4x"></i><br>
                <form action="" method="post" enctype="multipart/form-data">
                    <textarea name="link_link" cols="20" rows="4"></textarea> <br>
                    <button name="save_linkedlin" type="submit" class="btn btn-primary">inserir</button>
                </form>
        </div>
    </div>
</div>

<?php
include ('../includes/db.php');
if (isset($_POST['save_face'])){
    $link = $_POST['link_face'];
    $update = "update social_media set facebook='$link'";
    $query = mysqli_query($con, $update);
    if ($query){
        echo '<script>alert("Registrado com Sucesso")</script>';
        exit;
    }
}

?>

<?php
include ('../includes/db.php');
if (isset($_POST['save_insta'])){
    $link = $_POST['link_insta'];
    $update = "update social_media set instagram='$link'";
    $query = mysqli_query($con, $update);
    if ($query){
        echo '<script>alert("Registrado com Sucesso")</script>';
        exit;
    }
}

?>

<?php
include ('../includes/db.php');
if (isset($_POST['save_linkedlin'])){
    $link = $_POST['link_link'];
    $update = "update social_media set linkedlin='$link'";
    $query = mysqli_query($con, $update);
    if ($query){
        echo '<script>alert("Registrado com Sucesso")</script>';
        exit;
    }
}

?>
