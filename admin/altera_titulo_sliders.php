
<?php
include ('../includes/db.php');
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

?>
<?php

include ('../includes/db.php');

if(isset($_POST['update_title']) || isset($_GET['title_id'])){

    $id = $_GET['title_id'];

    $slide_name = $_POST['titulo'];

    $update_slide = "update slider_titulo_ar set titulo='$slide_name' where id='$id'";

    $run_slide = mysqli_query($con,$update_slide);

    if($run_slide){

        echo "<script>alert('TITULO ALTERADO COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?sliders_ar', '_self')</script>";

    }else {
        echo "<script>alert('ERRO AO ALTERAR TITULO')</script>";

    }
}

?>

<?php
    if (isset($_POST['atualizar_sobreNos']) || isset($_GET['id_sobre_texto'])){

        $id_sobre = $_GET['id_sobre_texto'];
        $texto = $_POST['texto_sobre'];

        $sql = "update texto_sobreNos set texto='$texto' where id='$id_sobre'";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?sobre_ar', '_self')</script>";
        }else {
            echo "<script>alert('ERRO AO ALTERAR TEXTO')</script>";
            echo "<script>window.open('painel.php?sobre_ar', '_self')</script>";

        }
    }
    ?>

    <?php
    if (isset($_POST['atualizar_ct']) || isset($_GET['id_sobre_texto_ct'])){

        $id_sobre = $_GET['id_sobre_texto_ct'];

        $title = $_POST['titutlo_one'];
        $texto_two = $_POST['titutlo_two_ct'];
        $des = $_POST['texto_sobre_ct'];


        $sql = "update ct_about_us_txt set titulo='$title', titulo_two='$texto_two', descricao='$des' where id='$id_sobre'";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";
        }else {
            echo "<script>alert('ERRO AO ALTERAR TEXTO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";

        }
    }
    ?>


    <?php
    if (isset($_POST['atualizar_ct_txt']) || isset($_GET['text_header'])){

        $id_sobre = $_GET['text_header'];

        $des = $_POST['texto_header'];


        $sql = "update ct_header set texto='$des' where id='$id_sobre'";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_header', '_self')</script>";
        }else {
            echo "<script>alert('ERRO AO ALTERAR TEXTO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_header', '_self')</script>";

        }
    }
    ?>



<?php } ?>