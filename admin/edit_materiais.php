
<?php
include ('../includes/db.php');
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>

   <div class="container">
       <div class="row" ><!-- 2 row Starts -->

           <div class="col-lg-12" ><!-- col-lg-12 Starts -->

               <div class="panel panel-default" ><!-- panel panel-default Starts -->

                   <div class="panel-heading" ><!-- panel-heading Starts -->

                       <h3 class="panel-title" ><!-- panel-title Starts -->

                           <i class="fas fa-chalkboard-teacher"></i> Livros

                       </h3><!-- panel-title Ends -->


                   </div><!-- panel-heading Ends -->

                   <div class="panel-body" ><!-- panel-body Starts -->

                       <div class="table-responsive-md table-responsive-xl" ><!-- table-responsive Starts -->

                           <table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

                               <thead>

                               <tr>
                                   <th style="font-size: 12px;">ID</th>
                                   <th style="font-size: 12px;">Titulo</th>
                                   <th style="font-size: 12px;">Descricao</th>
                                   <th>Url</th>

                                   <th>Deletar</th>
                                   <th>Editar</th>



                               </tr>

                               </thead>

                               <tbody>

                               <?php

                               $get_pro = "select * from categorias_materials";

                               $run_pro = mysqli_query($con,$get_pro);

                               while ($row_pro=mysqli_fetch_array($run_pro)){

                               $pro_id = $row_pro['id'];

                               $title = $row_pro['title'];

                               $desc = $row_pro['descricao'];

                               $url = $row_pro['url'];

                               ?>

                               <tr>
                                   <td><?php echo $pro_id; ?></td>

                                   <td><?php echo $title; ?></td>

                                   <td><?php echo $desc; ?></td>

                                   <td><?php echo $url; ?></td>


                                   <td>

                                       <a href="deletar_curso.php?delete_material=<?php echo $pro_id; ?>">
                                           <button class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                       </a>
                                   </td>

                                   <td>

                                       <a href="edit_m.php?edit_m=<?php echo $pro_id; ?>">
                                           <button class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
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


   </div>


<?php } ?>