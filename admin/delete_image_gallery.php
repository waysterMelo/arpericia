
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

?>
<?php include('../includes/db.php');
include('../functions/functions.php'); ?>


<div class="row"><!--  1 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <ol class="breadcrumb" ><!-- breadcrumb Starts -->

                <li class="active" >

                    <i class="fa fa-dashboard"></i> Dashboard / Deletar Imagens

                </li>

            </ol><!-- breadcrumb Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!--  1 row Ends -->

    <div class="row" ><!-- 2 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" ><!-- panel-title Starts -->

                        <i class="fa fa-money fa-fw" ></i> Ver Imagens

                    </h3><!-- panel-title Ends -->


                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->

                    <div class="table-responsive" ><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th><i class="fas fa-asterisk"></i> Imagem ID</th>
                                <th><i class="fas fa-text-width"></i> Imagem Titulo</th>
                                <th><i class="fas fa-image"></i> Imagem</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $i = 0;

                            $get_pro = "select * from galeria";

                            $run_pro = mysqli_query($con,$get_pro);

                            while($row_pro=mysqli_fetch_array($run_pro)){

                                $pro_id = $row_pro['id'];

                                $pro_title = $row_pro['title'];

                                $pro_image = $row_pro['img'];

                                $i++;

                                ?>

                                <tr>

                                    <td><?php echo $i; ?></td>

                                    <td><?php echo $pro_title; ?></td>

                                    <td><img src="../css/imagens/<?php echo $pro_image; ?>" width="60" height="60"></td>

                                    <td>

                                        <a href="delete_imagem.php?delete_imagem=<?php echo $pro_id; ?>">

                                            <i class="fas fa-trash-alt"></i> <span class="text-danger">Deletar</span>

                                        </a>

                                    </td>

                                </tr>

                            <?php } ?>


                            </tbody>


                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->

<?php  } ?>