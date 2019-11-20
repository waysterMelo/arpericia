<?php
include ('../includes/db.php');
$sql = " select * from contato";
$query = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query);
$title_endereco = $rs['titulo_endereco'];
nl2br($texto1 = $rs['texto_caixa1']);
$title_endereco2 = $rs['titulo_endereco2'];
nl2br($texto2 = $rs['texto_caixa2']);
$title_email = $rs['email_title'];
$email = $rs['email'];
$title_cel = $rs['cel_title'];
$cel = $rs['cel'];

?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title">
            editar pagina contatos
        </h1>
    </div>
    <div class="panel-body">

        <!-- Inner Page Wrapper Start -->
        <div class="inner-page-wrapper contactus-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-md-5">
                        <ul class="contact-info-list">
                            <form action="" method="post" enctype="multipart/form-data">
                                <li><span class="fa fa-map"></span> <b><input name="title_endereco" type="text" value="<?php echo $title_endereco; ?>"></b>
                                    <p><br>
                                        <textarea name="texto1" cols="30" rows="5"><?php echo $texto1; ?></textarea>
                                    </p>
                                    <button type="submit" name="save1" class="btn btn-success">alterar</button>
                                </li>
                            </form>
                            <hr>

                    </div>
                    <div class="col-lg-4 mb-md-5">
                        <ul class="contact-info-list">
                            <form action="" method="post" enctype="multipart/form-data">
                                <li><span class="fa fa-map"></span><b><input name="title_endereco2" type="text" value="<?php echo $title_endereco2; ?>"></b>
                                <p><br>
                                    <textarea name="texto2" cols="30" rows="5"><?php  echo $texto2; ?></textarea>
                                </p>
                               <button name="save2" class="btn btn-success">alterar</button>
                            </li>
                            </form>
                            <hr>
                    </div>
                    <div class="col-lg-4 mb-md-5">
                        <ul class="contact-info-list">
                            <form action="" method="post" enctype="multipart/form-data">
                            <li><span class="fa fa-envelope"></span><b><input name="title_email" type="text" value="<?php echo $title_email;?>"></b><br>
                                <textarea name="email" cols="30" rows="3"><?php echo $email;?></textarea>
                            </li>
                                <br>
                            <li><span class="fa fa-phone"></span><b><input name="title_cel" type="text" value="<?php echo $title_cel;?>"></b><br>
                                <textarea name="cel" cols="30" rows="4"><?php echo $cel;?></textarea>
                            <br>
                                <button name="save3" class="btn btn-success">salvar</button>
                            </form>
                        </ul>
                        <hr>
                        <hr>

                    </div>

                </div>

            </div>
        </div>
        <!-- Inner Page Wrapper End -->
    </div>
</div>



<?php

if (isset($_POST['save1'])){
    $title1 = $_POST['title_endereco'];
    $texto1S = $_POST['texto1'];

    $update = "update contato set titulo_endereco='$title1', texto_caixa1='$texto1S'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?page_contato', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?page_contato', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>
<?php

if (isset($_POST['save2'])){
    $title2 = $_POST['title_endereco2'];
    $texto2S = $_POST['texto2'];

    $update = "update contato set titulo_endereco2='$title2', texto_caixa2='$texto2S'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?page_contato', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?page_contato', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>
<?php

if (isset($_POST['save3'])){
    $t_email = $_POST['title_email'];
    $email = $_POST['email'];

    $t_cel = $_POST['title_cel'];
    $cel_tmp = $_POST['cel'];

    $update = "update contato set email_title='$t_email', email='$email', cel_title='$t_cel', cel='$cel_tmp'";
    $query = mysqli_query($con, $update);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?page_contato', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?page_contato', '_self')</script>";
        echo mysqli_error($con);

    }
}

?>



