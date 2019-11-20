
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

?>
<?php include('../includes/db.php');
include('../functions/functions.php'); ?>



    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="pt-5"><i class="fas fa-edit"></i> Editar Cabecalho</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <?php
                                $sql = "select * from header_logo_ar";
                                $query = mysqli_query($con, $sql);
                                $rs = mysqli_fetch_array($query);
                                if ($rs > 0){
                                    $idP = $rs['id'];
                                    $imgP = $rs['imagem'];
                                    echo "<img src=\"../css/imagens/$imgP\" class=\"img-fluid img-thumbnail\" style='max-width: 300px; max-height: 300px;'>";
                                }else {
                                    echo "nao contem imagem";
                                }
                                ?>
                                <a href="delete_imagem.php?img_header=<?php echo $idP; ?>" class="mx-auto my-2 btn btn-danger btn-sm">Remover</a>
                            </div>
                        </td>
                        <td>
                           <div class="col-md-6">
                               <form class="form" action="" method="post" enctype="multipart/form-data">
                                   <div class="form-group">
                                       <input type="file" class="form-control-file" name="imagemHeader" placeholder="Imagem">
                                   </div>
                                   <button class="mt-4 btn btn-success btn-sm" type="submit" name="salvar">Salvar nova imagem</button>
                               </form>
                           </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="pt-5"><i class="fas fa-phone-square"></i> Editar Telefones</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                    <tr>
                        <td>
                            <div class="col-md-6">
                                <?php
                                $sql = "select * from ar_pericia_telefones limit 0,1";
                                $query = mysqli_query($con, $sql);
                                $rs = mysqli_fetch_array($query);
                                    $id_tel = $rs['id'];
                                    $tel = $rs['telefones'];
                                ?>
                                <form method="post" action="update.php?id_tel=<?php echo $id_tel; ?>">
                                    <label for="">Telefone</label>
                                    <h1><input type="text" name="tel1" value="<?php echo $tel; ?>"/></h1>
                                    <button class="btn btn-info btn-md mx-auto" type="submit" name="tel1_save">atualizar</button>
                                </form>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <?php
                                $sql = "select * from ar_pericia_telefones limit 1,2";
                                $query = mysqli_query($con, $sql);
                                $get = mysqli_fetch_array($query);
                                $id_telDois = $get['id'];
                                $tel = $get['telefones'];
                                ?>
                                <label for="">Telefone</label>
                                <form action="update.php?id_tel2=<?php echo $id_telDois;?>" method="post">
                                    <h1><input type="text" name="tel2" value="<?php echo $tel;?>"></h1>
                                    <button class="btn btn-info btn-md mx-auto" type="submit" name="tel2_save">atualizar</button>
                                </form>


                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="pt-5"><i class="fas fa-phone-square"></i> Editar Emails</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                    <tr>
                        <td>
                            <div class="col-md-6">
                                <?php
                                $sql = "select * from ar_emails limit 0,1";
                                $query = mysqli_query($con, $sql);
                                $rs = mysqli_fetch_array($query);
                                $id_email = $rs['id'];
                                $email1 = $rs['email'];
                                ?>
                                <form method="post" action="update.php?email1=<?php echo $id_email; ?>">
                                    <label for="">email 1</label>
                                    <h3><textarea type="text" name="email_1" cols="22"><?php echo $email1; ?></textarea></h3>
                                    <button class="btn btn-info btn-md mx-auto" type="submit" name="save_email">atualizar</button>
                                </form>
                            </div>
            </div>
            <div class="col-md-6">
                <?php
                $sql = "select * from ar_emails limit 1,2";
                $query = mysqli_query($con, $sql);
                $get = mysqli_fetch_array($query);
                $id_email2 = $get['id'];
                $email2 = $get['email'];
                ?>
                <label for="">email 2</label>
                <form action="update.php?email2=<?php echo $id_email2;?>" method="post">
                    <h3><textarea type="text" name="email_2"><?php echo $email2;?></textarea></h3>
                    <button class="btn btn-info btn-md mx-auto" type="submit" name="save_email2">atualizar</button>
                </form>


            </div>
            </td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>


<?php } ?>



<?php

    if (isset($_POST['salvar'])){

        $image = $_FILES['imagemHeader']['name'];
        $temp_img = $_FILES['imagemHeader']['tmp_name'];

        move_uploaded_file($temp_img, "../css/imagens/$image");
        $sql = "insert into header_logo_ar (imagem) values ('$image')";
        $run = mysqli_query($con, $sql);

        if ($run){
            echo "<script>alert('IMAGEM CADASTRADA COM SUCESSO')</script>";

            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }else {

            echo "<script>alert('VOCE JA TEM IMAGEMS CADASTRADAS')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";

        }

    }

?>


