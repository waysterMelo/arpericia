
<?php
include ('../includes/db.php');
session_start();
if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){

    header("Location: login.php");
    exit;
} else {

    ?>


<?php
    if (isset($_POST['alterar_t_one']) || isset($_GET['change_txt_id'])){

        $id = $_GET['change_txt_id'];
        $txt = $_POST['texto_1'];
        $sql = "update textos_img_p set texto='$txt' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";
        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

        }
    }
    ?>
<?php
    if (isset($_POST['alterar_t_two']) || isset($_GET['change_txt2_id'])){

        $id = $_GET['change_txt2_id'];
        $txt = $_POST['texto_2'];
        $sql = "update textos_img_p set texto='$txt' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?imgTPrincipal', '_self')</script>";

        }
    }
    ?>
<?php

    if(isset($_POST['atualizar_curso']) || isset($_GET['id_curso'])){

        $id = $_GET['id_curso'];

        $product_title = $_POST['product_title'];
        $product_img1 = $_FILES['product_img1']['name'];
        $product_c = $_POST['product_c'];
        $instrutor = $_POST['instrutor'];
        $data_l = $_POST['data_lan'];
        $obj = $_POST['obj'];
        $publico = $_POST['publico'];
        $conteudo = $_POST['conteudo'];
        $video = $_POST['video'];

        $temp_name1 = $_FILES['product_img1']['tmp_name'];
        move_uploaded_file($temp_name1,"../css/imagens/$product_img1");


        $update_product = "update cursos set titulo='$product_title', img ='$product_img1', carga_horaria='$product_c', instrutor='$instrutor',
                               lancamento='$data_l', objetivo='$obj', publico_alvo='$publico', conteudo_programatico='$conteudo', url_video='$video' where id_cursos='$id'";

        $run_product = mysqli_query($con,$update_product);

        if($run_product){

            echo "<script> alert('Curso alterado com sucesso') </script>";
            echo "<script>window.open('painel.php?edit_cursos','_self')</script>";

        }else {
            echo "<script> alert('Erro ao alterar curso') </script>";
            echo "<script>window.open('painel.php?edit_cursos','_self')</script>";

        }

    }

    ?><!-- update cursos -->


    <?php

    if(isset($_POST['atualizar_livro']) || isset($_GET['id_livro'])){

        $id = $_GET['id_livro'];

        $titulo = $_POST['titulo'];

        $image = $_FILES['image']['name'];

        $autor = $_POST['autor'];

        $edicao = $_POST['edicao'];

        $obj = $_POST['obj'];

        $publico = $_POST['publico'];

        $conteudo = $_POST['conteudo'];

        $video = $_POST['video'];

        $editora = $_POST['editora'];

        $paginas = $_POST['paginas'];

        $preco = $_POST['preco'];

        $isbn = $_POST['isbn'];

        $sumario = $_POST['sumario'];


        $temp_name1 = $_FILES['image']['tmp_name'];
        move_uploaded_file($temp_name1,"../css/imagens/$image");


        $update_product = "update livros set 
        titulo='$titulo', 
        img ='$image',
        paginas='$paginas',
        autor='$autor',
        editora='$editora',
        edicao='$edicao',
         objetivo='$obj',
          publico='$publico',
           conteudo='$conteudo',
           video='$video',
           price='$preco',
           sumario='$sumario',
           isbn='$isbn'
             where id='$id'";

        $run_product = mysqli_query($con,$update_product);

        if($run_product){

            echo "<script> alert('Livro alterado com sucesso') </script>";
            echo "<script>window.open('painel.php?edit_livro','_self')</script>";

        }else {
            echo "<script> alert('Erro ao alterar livro') </script>";
           echo "<script>window.open('painel.php?edit_livro','_self')</script>";
            echo mysqli_error($con);

        }

    }

    ?><!-- update book -->

    <?php
    if (isset($_POST['atualizar_m']) || isset($_GET['id_m'])){

        $id = $_GET['id_m'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $url = $_POST['url'];


        $sql = "update categorias_materials set title='$titulo', descricao='$descricao', url='$url' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert(' ALTERACAO REALIZADA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?edit_materiais', '_self')</script>";

        }else {
            echo "<script>alert('ALTERACAO REALIZADA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?edit_materiais', '_self')</script>";

        }
    }
    ?><!-- update materials -->

    <?php
    if (isset($_POST['tel1_save']) || isset($_GET['id_tel'])){

        $id = $_GET['id_tel'];
        $tel = $_POST['tel1'];
        $sql = "update ar_pericia_telefones set telefones='$tel' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";

        }
    }
    ?><!-- update tel 1 -->

    <?php
    if (isset($_POST['tel2_save']) || isset($_GET['id_tel2'])){

        $id = $_GET['id_tel2'];
        $tel = $_POST['tel2'];
        $sql = "update ar_pericia_telefones set telefones='$tel' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";

        }
    }
    ?><!-- update tel 2 -->

    <?php
    if (isset($_POST['save_email']) || isset($_GET['email1'])){

        $id = $_GET['email1'];
        $email = $_POST['email_1'];
        $sql = "update ar_emails set email='$email' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";

        }
    }
    ?><!-- update email 1 -->

    <?php
    if (isset($_POST['save_email2']) || isset($_GET['email2'])){

        $id = $_GET['email2'];
        $email2 = $_POST['email_2'];
        $sql = "update ar_emails set email='$email2' where id=$id";
        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";
        }else {
            echo "<script>alert('TEXTO ALTERADO COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cabecalhoArPericia', '_self')</script>";

        }
    }
    ?><!-- update email 2 -->

    <?php
        if (isset($_POST['save_img1'])){

            $imagem = $_FILES['img_footer']['name'];
            $temp_name = $_FILES['img_footer']['tmp_name'];
            move_uploaded_file($temp_name, "../css/imagens/$imagem");

            $sql = "update footer_img1 set imagem='$imagem'";

            $query = mysqli_query($con, $sql);

            if ($query){
                echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
                echo "<script>window.open('painel.php?rodape', '_self')</script>";
            }else {
                echo "<script>alert('OCORREU UM ERRO')</script>";
                echo "<script>window.open('painel.php?rodape', '_self')</script>";
//                echo mysqli_error($con);

            }
        }
    ?>

    <?php
    if (isset($_POST['footer_save'])){

        $texto = $_POST['texto_footer'];

        $sql = "update footer_img1 set imagem='$imagem'";

        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?rodape', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
            echo "<script>window.open('painel.php?rodape', '_self')</script>";
//                echo mysqli_error($con);

        }
    }
    ?>

    <?php
    if (isset($_POST['save_img2'])){

        $imagem = $_FILES['img_footer2']['name'];
        $temp_name = $_FILES['img_footer2']['tmp_name'];

        move_uploaded_file($temp_name, "../css/imagens/$imagem");

        $sql = "update footer_img2 set imagem='$imagem'";

        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?rodape', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
//            echo "<script>window.open('painel.php?rodape', '_self')</script>";
                echo mysqli_error($con);

        }
    }
    ?><!-- update img footer side 2 -->
    <?php
    if (isset($_POST['footer_save2'])){

       $texto = $_POST['texto_footer2'];

        $sql = "update footer_img2 set texto='$texto'";

        $query = mysqli_query($con, $sql);

        if ($query){
            echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?rodape', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
//            echo "<script>window.open('painel.php?rodape', '_self')</script>";
            echo mysqli_error($con);

        }
    }
    ?><!-- update text footer side 2 -->

    <?php
    if (isset($_POST['save_title_ct'])){

        $title = $_POST['ct_title'];

        $sql = "update ct_about_us_txt set titulo= '$title'";

        $query = mysqli_query($con,$sql);

        if ($query){
            echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
           echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";

        }
    }
    ?>

    <?php
    if (isset($_POST['save_sub_title_ct'])){

        $sub_title = $_POST['sub_ct_title'];

        $sql = "update ct_about_us_txt set sub_title= '$sub_title'";

        $query = mysqli_query($con,$sql);

        if ($query){
            echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";

        }
    }
    ?>

    <?php
    if (isset($_POST['save_descr_ct'])){

        $descricao = $_POST['descr_ct'];

        $sql = "update ct_about_us_txt set descricao= '$descricao'";

        $query = mysqli_query($con,$sql);

        if ($query){
            echo "<script>alert('ALTERACAO FEITA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";

        }
    }
    ?>

    <?php
    if (isset($_POST['saveImg_about'])){


        $img = $_FILES['imageCtHeader']['name'];
        $tmp_img = $_FILES['imageCtHeader']['tmp_name'];

        move_uploaded_file($tmp_img, "../css/imagens/$img");

        $update = "update ct_img_about set imagem= '$img'";

        $query = mysqli_query($con, $update);

        if ($query){
            echo "<script>alert('IMAGEM INSERIDA COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
           echo "<script>window.open('painel.php?cursosetreinamentos_About', '_self')</script>";
//            echo mysqli_error($con);

        }
    }
    ?>

    <?php
        if (isset($_POST['save_logo_book'])){

            $img_logo_book =$_FILES['img_logo_book']['name'];
            $temp_name_book_logo = $_FILES['img_logo_book']['temp_name'];

            move_uploaded_file($temp_name_book_logo, "../css/imagens/$img_logo_book");

            $sql = "update pagina_livros set img_logo = '$img_logo_book'";
            $query = mysqli_query($con, $sql);


            if ($query){
                echo "<script>alert('IMAGEM INSERIDA COM SUCESSO')</script>";
                echo "<script>window.open('painel.php?page_book', '_self')</script>";
            }else {
                echo "<script>alert('OCORREU UM ERRO')</script>";
           echo "<script>window.open('painel.php?page_book', '_self')</script>";
//                echo mysqli_error($con);

            }


        }
    ?>

    <?php
        if (isset($_POST['footer_save_textos'])){

            $tel1 = $_POST['tel1'];
            $tel2 = $_POST['tel2'];

            $email1 = $_POST['email1'];
            $email2 = $_POST['email2'];

            $sql = "update pagina_livros set tel1='$tel1', tel2='$tel2', email1='$email1', email2='$email2'";

            $query = mysqli_query($con,$sql);

            if ($query){
                echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
                echo "<script>window.open('painel.php?page_book', '_self')</script>";
            }else {
                echo "<script>alert('OCORREU UM ERRO')</script>";
          echo "<script>window.open('painel.php?page_book', '_self')</script>";
//                echo mysqli_error($con);

            }


        }
    ?>

    <?php

    if (isset($_POST['save_title'])){

        $texto = $_POST['titulo_livros'];

        $sql = "update pagina_livros set titulo='$texto'";
        $query = mysqli_query($con, $sql);

        $query = mysqli_query($con,$sql);

        if ($query){
            echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
            echo "<script>window.open('painel.php?page_book', '_self')</script>";
        }else {
            echo "<script>alert('OCORREU UM ERRO')</script>";
           echo "<script>window.open('painel.php?page_book', '_self')</script>";
  //          echo mysqli_error($con);

        }

    }
    ?>

    <?php
        if (isset($_POST['save_img_bookLogo'])){

            $imgBook =$_FILES['book_logo_img']['name'];
            $temp_name_book = $_FILES['book_logo_img']['tmp_name'];

            move_uploaded_file($temp_name_book, "../css/imagens/$imgBook");

            $update = "update pagina_livros set img_deep='$imgBook'";
            $query = mysqli_query($con, $update);

            if ($query){
                echo "<script>alert('INFORMAÇÕES ATUALIZADAS COM SUCESSO')</script>";
                echo "<script>window.open('painel.php?page_book', '_self')</script>";
            }else {
                echo "<script>alert('OCORREU UM ERRO')</script>";
                //echo "<script>window.open('painel.php?page_book', '_self')</script>";
                          echo mysqli_error($con);

            }


        }
    ?>

<?php } ?>
