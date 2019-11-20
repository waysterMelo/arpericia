<?php
    include('../includes/db.php');
    $sql = "select * from pagina_videos";
    $query = mysqli_query($con, $sql);
    $rs = mysqli_fetch_array($query);
    $img_fundo = $rs['img_fundo'];
    $titulo = $rs['titulo'];
?>
<div class="col-md-9 col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-edit"></i> trocar imagem de fundo e titulo</h3>

        </div>
        <div class="panel-body">
            <div class="container-fluid" style="background-image: url('../css/imagens/<?php echo $img_fundo; ?>'); background-size: cover; height: 550px; background-attachment: fixed;">
                <div class="col-lg-12">
                    <h1 class="text-center text-info pt-5 font-weight-bold "><?php echo $titulo; ?></h1> <br>
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-4" style="border: 2px solid whitesmoke; background-color: whitesmoke">
                        <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="text-info">alterar texto</label><br>
                                <input type="text" name="title">
                                <button class="btn btn-success btn-md" name="save-title">salvar</button>
                            </div>
                        </form>
                        <form class="" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="" class="text-info">alterar imagem de fundo</label><br>
                                <input type="file" class="form-control-plaintext" name="input_img">
                                <center><button class="btn btn-success btn-md" name="save-img">salvar</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php

if (isset($_POST['save-title'])){

    $title  = $_POST['title'];

    $sql = "update pagina_videos set titulo='$title'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?page_videos', '_self')</script>";
    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?page_videos', '_self')</script>";
        echo mysqli_error($con);

    }
}


?>


<?php

if (isset($_POST['save-img'])){

    $img_fundo_file  = $_FILES['input_img']['name'];
    $tmp_name = $_FILES['input_img']['tmp_name'];

    move_uploaded_file($tmp_name, "../css/imagens/$img_fundo_file");

    $sql = "update pagina_videos set img_fundo ='$img_fundo_file'";
    $query = mysqli_query($con, $sql);

    if ($query){
        echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
        echo "<script>window.open('painel.php?page_videos', '_self')</script>";

    }else {
        echo "<script>alert('OCORREU UM ERRO')</script>";
        //echo "<script>window.open('painel.php?page_videos', '_self')</script>";
        echo mysqli_error($con);

    }
}


?>
