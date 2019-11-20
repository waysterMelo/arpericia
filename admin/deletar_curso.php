<?php
include ('../includes/db.php');

    if (isset($_GET['delete_product'])){

        $id = $_GET['delete_product'];

        $sql = "delete from cursos where id_cursos = '$id'";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('CURSO DELETADO')</script>";
            echo "<script>window.open('painel.php?edit_cursos', '_self')</script>";
        }else {
            echo "<script>alert('ERRO AO DELETAR CURSO')</script>";
            echo "<script>window.open('painel.php?edit_cursos', '_self')</script>";
        }
    }


?>
<?php
include ('../includes/db.php');

if (isset($_GET['delete_livro'])){

    $id = $_GET['delete_livro'];

    $sql = "delete from livros where id='$id'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('CURSO DELETADO')</script>";
        echo "<script>window.open('painel.php?edit_livro', '_self')</script>";
    }else {
        echo "<script>alert('ERRO AO DELETAR CURSO')</script>";
        echo "<script>window.open('painel.php?edit_livro', '_self')</script>";
    }
}
?>
<?php
include ('../includes/db.php');

if (isset($_GET['delete_material'])){

    $id = $_GET['delete_material'];

    $sql = "delete from categorias_materials where id='$id'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('MATERIAL DELETADO')</script>";
        echo "<script>window.open('painel.php?edit_materiais', '_self')</script>";
    }else {
        echo "<script>alert('ERRO AO DELETAR MATERIAL')</script>";
        echo "<script>window.open('painel.php?edit_materiais', '_self')</script>";
    }
}


?>


