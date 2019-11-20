
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="row"><!-- 2 row Starts -->

                    <div class="col-lg-12"><!-- col-lg-12 Starts -->

                        <div class="panel panel-default"><!-- panel panel-default Starts -->

                            <div class="panel-heading"><!-- panel-heading Starts -->

                                <h3 class="panel-title">

                                    <i class="fa fa-money fa-fw"></i> Adicionar Materiais

                                </h3>

                            </div><!-- panel-heading Ends -->

                            <div class="panel-body"><!-- panel-body Starts -->

                                <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Titulo </label>

                                        <div class="col-md-6" >

                                            <input type="text" name="title" class="form-control" required>

                                        </div>

                                    </div><!-- form-group Ends -->


                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Descricao Rapida</label>

                                        <div class="col-md-6" >

                                            <textarea type="text" name="desc" class="form-control" required"></textarea>

                                        </div>

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" >Link do Arquivo</label>

                                        <div class="col-md-6" >

                                            <input type="text" name="link" class="form-control" required">

                                        </div>

                                    </div><!-- form-group Ends -->

                                    </div><!-- form-group Ends -->

                                    <div class="form-group" ><!-- form-group Starts -->

                                        <label class="col-md-3 control-label" ></label>

                                        <div class="col-md-6" >

                                            <input type="submit" name="save_m" value="cadastrar" class="btn btn-primary form-control" >

                                        </div>

                                    </div><!-- form-group Ends -->

                                </form><!-- form-horizontal Ends -->

                            </div><!-- panel-body Ends -->

                        </div><!-- panel panel-default Ends -->

                    </div><!-- col-lg-12 Ends -->

                </div><!-- 2 row Ends -->
            </div>
        </div>
    </div>

    <?php

    if(isset($_POST['save_m'])){

        $title = $_POST['title'];
        $desc = $_POST['desc'];
        $link = $_POST['link'];

        $sql = "insert into categorias_materials (title, descricao, url) values ('$title', '$desc', '$link')";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('Material Inserido com Sucesso')</script>";
            echo "<script>window.open('painel.php?add_materiais', '_self')</script>";

        }else {
            echo "<script>alert('Erro ao Inserir Material')</script>";
        echo "<script>window.open('painel.php?add_materiais', '_self')</script>";
        }
    }

}

?>


