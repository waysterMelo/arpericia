
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>

    <div class="row" ><!-- 2 row Starts -->

        <div class="col-lg-12" ><!-- col-lg-12 Starts -->

            <div class="panel panel-default" ><!-- panel panel-default Starts -->

                <div class="panel-heading" ><!-- panel-heading Starts -->

                    <h3 class="panel-title" ><!-- panel-title Starts -->

                        <i class="fas fa-chalkboard-teacher"></i> Livros

                    </h3><!-- panel-title Ends -->


                </div><!-- panel-heading Ends -->

                <div class="panel-body" ><!-- panel-body Starts -->

                    <div class="table-responsive" ><!-- table-responsive Starts -->

                        <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                            <thead>

                            <tr>
                                <th style="font-size: 12px;">ID</th>
                                <th style="font-size: 12px;">Titulo</th>
                                <th style="font-size: 12px;">Imagem</th>
                                <th>Deletar</th>
                                <th>Editar</th>
                            </tr>

                            </thead>

                            <tbody>

                            <?php

                            $get_pro = "select * from livros";

                            $run_pro = mysqli_query($con,$get_pro);

                            while ($row_pro=mysqli_fetch_array($run_pro)){

                            $pro_id = $row_pro['id'];

                            $pro_title = $row_pro['titulo'];

                            $pro_image = $row_pro['img'];


                            ?>

                            <tr>
                                <td><?php echo $pro_id; ?></td>

                                <td><?php echo $pro_title; ?></td>

                                <td><img src="../css/imagens/<?php echo $pro_image; ?>" width="60" height="60"></td>
                                <td>

                                    <a href="deletar_curso.php?delete_livro=<?php echo $pro_id; ?>">
                                        <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Deletar</button>
                                    </a>
                                </td>

                                <td>

                                    <a href="edit_book.php?edit_livro=<?php echo $pro_id; ?>">
                                        <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Editar</button>
                                    </a>
                                </td>
                            </tr>

                            </tbody>

                            <?php } ?>

                        </table><!-- table table-bordered table-hover table-striped Ends -->

                    </div><!-- table-responsive Ends -->

                </div><!-- panel-body Ends -->

            </div><!-- panel panel-default Ends -->

        </div><!-- col-lg-12 Ends -->

    </div><!-- 2 row Ends -->




<?php } ?>