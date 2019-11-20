
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {
    ?>

    <?php include ('../includes/db.php');
    include ('../functions/functions.php');?>


    <div class="row" ><!-- 2 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" ><!-- panel-title Starts -->

                        <i class="fas fa-chalkboard-teacher"></i> Editar informacoes

                    </h3><!-- panel-title Ends -->


                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->

                    <div class="table-responsive" ><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th style="font-size: 12px;">Titulo</th>
                                <th>Editar</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $get_pro = "select * from ct_about_us_txt";

                            $run_pro = mysqli_query($con,$get_pro);

                            while ($row_pro=mysqli_fetch_array($run_pro)){
                            $title = $row_pro['titulo'];
                            ?>

                            <tr>
                                <form action="update.php" method="post">
                                    <td><textarea cols="30" name="ct_title"><?php echo $title; ?></textarea></td>

                                    <td>
                                    <button class="btn btn-info btn-sm" type="submit" name="save_title_ct"><i class="fas fa-edit"></i> atualizar</button>
                                    </td>
                                </form>
                            </tr>


                            </tbody>

                            <?php } ?>

                        </table>

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th style="font-size: 12px;">Sub Titulo</th>
                                <th>Editar</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $get_pro = "select * from ct_about_us_txt";

                            $run_pro = mysqli_query($con,$get_pro);

                            while ($row_pro=mysqli_fetch_array($run_pro)){


                            $desc = $row_pro['sub_title'];



                            ?>

                            <tr>
                                <form action="update.php" method="post">
                                    <td><textarea cols="30" name="sub_ct_title"><?php echo $desc; ?></textarea></td>
                                    <td>
                                         <button class="btn btn-info btn-sm" type="submit" name="save_sub_title_ct"><i class="fas fa-edit"></i> atualizar</button>
                                    </td>
                                </form>
                            </tr>


                            </tbody>

                            <?php } ?>

                        </table><!-- table table-bordered table-hover table-striped Ends -->

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th style="font-size: 12px;">Texto</th>
                                <th>Editar</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $get_pro = "select * from ct_about_us_txt";

                            $run_pro = mysqli_query($con,$get_pro);

                            while ($row_pro=mysqli_fetch_array($run_pro)){
                            $descr = $row_pro['descricao'];

                            ?>

                            <tr>
                                <form action="update.php" method="post">
                                    <td><textarea cols="30" name="descr_ct"><?php echo $descr; ?></textarea></td>

                                    <td>
                                        <button class="btn btn-info btn-sm" type="submit" name="save_descr_ct"><i class="fas fa-edit"></i> atualizar</button>
                                    </td>
                                </form>
                            </tr>


                            </tbody>

                            <?php } ?>

                        </table>

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th style="font-size: 12px;">Imagem</th>
                                <th>atualizar imagem</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $get_pro = "select * from ct_img_about";

                            $run_pro = mysqli_query($con,$get_pro);

                            $row_pro=mysqli_fetch_array($run_pro);

                                $img_id = $row_pro['id'];
                                $pro_image_ct = $row_pro['imagem'];
                            ?>

                                <td>
                                    <img src="../css/imagens/<?php echo $pro_image_ct; ?>" class="img-fluid img-circle" style="width: 120px;"/>
                                </td>
                            <form action="update.php" method="post" enctype="multipart/form-data">
                                <td>
                                    <div class="form-group" ><!-- form-group Starts -->
                                        <div class="col-md-6" >
                                            <input type="file" name="imageCtHeader" class="form-control" required/>
                                        </div>

                                        <button class="btn btn-success btn-md" type="submit" name="saveImg_about">salvar</button>

                                    </div><!-- form-group Ends -->
                                </td>
                            </form>

                            </tr>


                            </tbody>


                        </table>


                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->


<?php } ?>




