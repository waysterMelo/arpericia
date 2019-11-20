
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>
    <?php include('../includes/db.php');
    include('../functions/functions.php'); ?>

    <div class="row" ><!-- 1 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <ol class="breadcrumb"><!-- breadcrumb Starts -->

                <li class="active">

                    <i class="fa fa-dashboard" ></i> Dashboard / Inserir Imagem Para a Galeria

                </li>

            </ol><!-- breadcrumb Ends -->



        </div><!-- col-lg-12 Ends -->

    </div><!-- 1 row Ends -->

    <div class="row" ><!-- 2 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" >

                        <i class="fa fa-money fa-fw"></i> Inserir imagem

                    </h3>

                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->

                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Imagem Nome:</label>

                            <div class="col-md-6">

                                <input type="text" name="slide_name" class="form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label">Imagem:</label>

                            <div class="col-md-6">

                                <input type="file" name="slide_image" class="form-control" >

                            </div>

                        </div><!-- form-group Ends -->

                        <div class="form-group" ><!-- form-group Starts -->

                            <label class="col-md-3 control-label"></label>

                            <div class="col-md-6">

                                <input type="submit" name="submit" value="cadastrar" class=" btn btn-primary form-control" >

                            </div>

                        </div><!-- form-group Ends -->


                    </form><!-- form-horizontal Ends -->

                </div><!-- panel-body Ends -->


            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->


    </div><!-- 2 row Ends -->

    <?php

    if(isset($_POST['submit'])){

        $slide_name = $_POST['slide_name'];

        $slide_image = $_FILES['slide_image']['name'];

        $temp_name = $_FILES['slide_image']['tmp_name'];

            move_uploaded_file($temp_name,"../css/imagens/$slide_image");

            $insert_slide = "insert into galeria (title, img) values ('$slide_name','$slide_image')";

            $run_slide = mysqli_query($con,$insert_slide);

            echo "<script>alert('IMAGEM CADASTRADA')</script>";

            echo "<script>window.open('painel.php?add_image_galeria','_self')</script>";

    }



    ?>



<?php } ?>