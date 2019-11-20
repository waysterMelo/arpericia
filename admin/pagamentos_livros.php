<?php
include('../includes/db.php');
$sql = "select * from pagamento_livros";
$query = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query);
nl2br($option1 = $rs['opcao1']);
nl2br($option2 = $rs['opcao2']);
nl2br($entrega = $rs['entrega']);
nl2br($info = $rs['info']);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">formas de pagamento livros</h1>
    </div>
    <div class="panel-body">
        <div class="col-md-12 col-lg-10">
            <div class="jumbotron jumbotron">
                   <h3 class="lead">
                       <form action="" method="post" enctype="multipart/form-data">
                           <textarea name="texto1" cols="80" rows="8" ><?php echo $option1; ?></textarea>
                           <button name="save1" type="submit" class="btn btn-info btn-lg">atualizar</button>
                       </form>
                   </h3>
                <hr>
                    <h3 class="lead">
                        <form action="" method="post" enctype="multipart/form-data">
                            <textarea name="texto2" cols="80" rows="8"><?php echo $option2; ?></textarea>
                            <button name="save2" type="submit" class="btn btn-info btn-lg">atualizar</button>
                        </form>
                    </h3>
                <hr>

                <h3 class="lead">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="entrega" cols="80" rows="10"><?php  echo $entrega; ?></textarea>
                        <button name="save3" class="btn btn-info btn-lg">atualizar</button>
                    </form>
                </h3>
                <hr>
                <h3 class="lead">
                    <form action="" method="post" enctype="multipart/form-data">
                        <textarea name="info" cols="40" rows="6"><?php  echo $info; ?></textarea>
                        <button name="save4" class="btn btn-info btn-lg">atualizar</button>
                    </form>
                </h3>
            </div>
        </div>
    </div>
</div>


<?php
include ('../includes/db.php');
if (isset($_POST['save1'])){
    $texto1  = $_POST['texto1'];
    $update = "update pagamento_livros set opcao1='$texto1'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>
<?php
include ('../includes/db.php');
if (isset($_POST['save2'])){
    $texto2  = $_POST['texto2'];
    $update = "update pagamento_livros set opcao2='$texto2'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>
<?php
include ('../includes/db.php');
if (isset($_POST['save3'])){
    $entrega  = $_POST['entrega'];
    $update = "update pagamento_livros set entrega='$entrega'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>
<?php
include ('../includes/db.php');
if (isset($_POST['save4'])){
    $info  = $_POST['info'];
    $update = "update pagamento_livros set info='$info'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?pag_livro', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>
