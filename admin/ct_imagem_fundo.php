
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
            <h2 class="pt-5"><i class="fas fa-edit"></i> Editar Imagem de Fundo Cursos e Treinamentos</h2>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tbody>
                    <tr>
                        <td>
                            <div class="col-md-12">
                                <?php
                                $sql = "select * from ct_imagemFundo";
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
                                <a href="delete_imagem.php?ct_img_fundo=<?php echo $idP; ?>" class="mx-auto my-2 btn btn-danger btn-sm">Remover</a>
                            </div>
                        </td>
                        <td>
                            <div class="col-md-12 col-lg-12">
                                <form class="form" action="" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" class="form-control-file" name="imagem_fundo" placeholder="Imagem">
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


<?php } ?>



<?php

if (isset($_POST['salvar'])){

    $image = $_FILES['imagem_fundo']['name'];
    $temp_img = $_FILES['imagem_fundo']['tmp_name'];

    move_uploaded_file($temp_img, "../css/imagens/$image");
    $sql = "insert into ct_imagemFundo (imagem) values ('$image')";
    $run = mysqli_query($con, $sql);

    if ($run){
        echo "<script>alert('IMAGEM CADASTRADA COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?cursosetreinamentos_imagem', '_self')</script>";
    }else {

        echo "<script>alert('VOCE JA TEM IMAGEMS CADASTRADAS')</script>";
        echo "<script>window.open('painel.php?cursosetreinamentos_imagem', '_self')</script>";

    }

}

?>
