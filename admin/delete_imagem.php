
<?php
include ('../includes/db.php');
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

?>

<?php

    if (isset($_GET['img_header'])){
        $id = $_GET['img_header'];

        $sql = "delete from header_logo_ar where id='$id'";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('IMAGEM DELETADA')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }else{
            echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }
    }

    ?><!-- DELETAR imagem logo header da ar pericia-->
<?php

    if(isset($_GET['id_imagem_pericia'])){

        $id = $_GET['id_imagem_pericia'];

        $edit_slide = "delete from img_principal_ar where id='$id'";

        $run_delete = mysqli_query($con,$edit_slide);

        if ($run_delete){
            echo "<script>alert('Imagem deletada')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";
        }else{
            echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";
        }
    }
    ?><!-- DELETAR imagem principal da ar pericia-->
<?php

    if(isset($_GET['id_imagem'])){

        $id = $_GET['id_imagem'];

        $edit_slide = "delete from ar_slider where id_slider= '$id'";

        $run_delete = mysqli_query($con,$edit_slide);

        if ($run_delete){
            echo "<script>alert('Imagem deletada')</script>";
            echo "<script>window.open('painel.php?sliders_ar', '_self')</script>";
        }else{
            echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
            echo "<script>window.open('painel.php?sliders_ar', '_self')</script>";
        }
    }
?><!-- DELETAR imagems do slider ar pericia-->
<?php

    if(isset($_GET['id_imagem_sobre'])){

        $id = $_GET['id_imagem_sobre'];

        $edit_slide = "delete from sobreNos where id='$id'";

        $run_delete = mysqli_query($con,$edit_slide);

        if ($run_delete){
            echo "<script>alert('Imagem deletada')</script>";
            echo "<script>window.open('painel.php?sobre_ar', '_self')</script>";
        }else{
            echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
            echo "<script>window.open('painel.php?sobre_ar', '_self')</script>";
        }
    }

    ?><!-- DELETAR IMAGEM SOBRE NOS-->


<?php

    if (isset($_GET['ct_header_delete'])){
        $id = $_GET['ct_header_delete'];

        $sql = "delete from ct_header where id='$id'";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('IMAGEM DELETADA')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_header', '_self')</script>";
        }else{
            echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_header', '_self')</script>";

        }
    }

    ?><!-- DELETAR imagem logo header da CURSOS E TREINAMENTOS-->

<?php

    if (isset($_GET['ct_img_fundo'])){
        $id = $_GET['ct_img_fundo'];

        $get = "select * from ct_imagemFundo";
        $get_q = mysqli_query($con, $get);
        $rs = mysqli_num_rows($get_q);

        if ($rs == null ){
            echo "<script>alert('Nao ha imagems para deletar')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_imagem', '_self')</script>";
            exit;
        }else{
            $sql = "delete from ct_imagemFundo where id='$id'";
            $query = mysqli_query($con, $sql);

            if ($query){
                echo "<script>alert('IMAGEM DELETADA')</script>";
                echo "<script>window.open('painel.php?cursosetreinamentos_imagem', '_self')</script>";
            }else{
                echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
                echo "<script>window.open('painel.php?cursosetreinamentos_imagem', '_self')</script>";

            }
        }
        }

    ?><!-- DELETAR imagem de fundo da CURSOS E TREINAMENTOS-->

<?php

    if (isset($_GET['delete_imagem'])){
        $id = $_GET['delete_imagem'];

        $get = "select * from galeria";
        $get_q = mysqli_query($con, $get);
        $rs = mysqli_num_rows($get_q);

        if ($rs == null ){
            echo "<script>alert('Nao ha imagems para deletar')</script>";
            echo "<script>window.open('painel.php?add_image_galery', '_self')</script>";
            exit;
        }else{
            $sql = "delete from galeria where id='$id'";
            $query = mysqli_query($con, $sql);

            if ($query){
                echo "<script>alert('IMAGEM DELETADA')</script>";
                echo "<script>window.open('painel.php?add_image_galery', '_self')</script>";
            }else{
                echo "<script>alert('OCORREU UM ERRO AO DELETAR A IMAGEM')</script>";
                echo "<script>window.open('painel.php?add_image_galery', '_self')</script>";

            }
        }
    }

    ?><!-- DELETAR imagem galeria-->

<?php } ?>


