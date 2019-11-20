<?php

include ("../includes/db.php");
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-title">
            <h1 class="panel-title"><i class="fa fa-edit"> </i> titulo e descricao dos servicos</h1>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12 col-lg-6 services bg-light">
            <?php
            $sql = "select * from coluna1";
            $query = mysqli_query($con, $sql);
            $row=mysqli_fetch_array($query);
            $titleC = $row['titulo'];
            $descricaoC = $row['descricao'];

            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center font-weight-bold"><h3><?php echo $titleC; ?></h3></div>
                </div>
                <div class="panel-body mx-auto mt-4">
                    <p class="text-muted"><?php echo nl2br($descricaoC); ?></p>
                </div>
            </div>
        </div>

        <div class="col-md-12 col-lg-6 services bg-light">
            <?php
            $sql = "select * from coluna1";
            $query = mysqli_query($con, $sql);
            $row=mysqli_fetch_array($query);
            $titleC = $row['titulo'];
            $descricaoC = $row['descricao'];

            ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title text-center font-weight-bold">
                        <?php
                        $sql = "select * from coluna1";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $id = $rs['id'];
                        ?>
                        <form action="" method="post">
                            <textarea name="title_services" cols="40"></textarea>
                            <button class="btn btn-success btn-md" type="submit" name="save_one">salvar</button>
                    </div>
                </div>
                <div class="panel-body mx-auto mt-4">
                    <textarea name="text_services" cols="60" rows="5"></textarea>
                    <center><button class="btn btn-success btn-md" type="submit" name="save">salvar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div><!-- our office and services-->

<div class="panel panel-default">
    <div class="panel-heading">
        <h1 class="panel-title"><i class="fa fa-edit"> </i> titulo ultimos cursos adicionados</h1>
    </div>
    <div class="panel-body">

        <!-- Our Featured Wrapper Start -->
        <div class="featured-wrapper">
            <div class="container-fluid">
                <div class="section-title">
                    <form action="" method="post" enctype="multipart/form-data">
                    <h2 data-aos="fade-down-left" data-aos-duration="2000">
                        <?php
                            $sql = "select * from coluna1";
                            $query = mysqli_query($con, $sql);
                            $rs = mysqli_fetch_array($query);
                            $title1 = $rs['title_newcurses'];
                        ?>
                        <textarea name="title1" cols="80"><?php echo $title1;?></textarea>
                    </h2>
                    <button type="submit" name="save_title" class="btn btn-success">atualizar</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- Our Featured Wrapper Start -->
    </div>
</div>

<?php

if (isset($_POST['save_one'])){

    $title = $_POST['title_services'];
//    $texto = $_POST['text_services'];

    $sql = "update coluna1 set titulo='$title'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('Texto Alterado com Sucesso')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }else {
        echo "<script>alert('Erro ao Alterar Texto')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }
}


?>


<?php

if (isset($_POST['save'])){

    $texto = $_POST['text_services'];

    $sql = "update coluna1 set descricao='$texto'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('Texto Alterado com Sucesso')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }else {
        echo "<script>alert('Erro ao Alterar Texto')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }
}


?>


<?php

if (isset($_POST['save_title'])){
    $title = $_POST['title1'];
    $update = "update coluna1 set title_newcurses='$title'";
    $query = mysqli_query($con, $update);
    if ($query){
        echo "<script>alert('Texto Alterado com Sucesso')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }else {
        echo "<script>alert('Erro ao Alterar Texto')</script>";
        echo "<script>window.open('painel.php?coluna1', '_self')</script>";
    }
}

?>