<?php
include ('includes/db.php');
$sql = " select * from contato";
$query = mysqli_query($con, $sql);
$rs = mysqli_fetch_array($query);
$title_endereco = $rs['titulo_endereco'];
nl2br($texto1 = $rs['texto_caixa1']);
$title_endereco2 = $rs['titulo_endereco2'];
nl2br($texto2 = $rs['texto_caixa2']);
$title_email = $rs['email_title'];
$email = $rs['email'];
$title_cel = $rs['cel_title'];
$cel = $rs['cel'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <link rel="icon" href="css/imagens/home.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo2.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>
    <script src="js/jquery.min.js"></script>

</head>
<body style="background-image: linear-gradient(to top, #d5d4d0 0%, #d5d4d0 1%, #eeeeec 31%, #efeeec 75%, #e9e9e7 100%);">


<div class="container-fluid bg-light">
    <div class="row">
        <div class="col-md-12">
            <div class="navigation">
                <nav class="navbar navbar-expand-sm navbar-default" style="border: 2px solid darkgreen;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto">

                            <li class="nav-item active">
                                <a class="nav-link" href="index.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    AR Pericia
                                </a>

                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="arletreinamentos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Cursos e Treinamentos
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="videos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Galeria
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="materias_diversos.php" role="button"  aria-haspopup="true"
                                   aria-expanded="false">
                                    Materiais Diversos
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php" role="button"  aria-haspopup="true"
                                   aria-expanded="false">
                                    Contato
                                </a>

                            <li class="nav-item">
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>


<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper contactus-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mb-30">
                <div class="default-form-area">
                    <h1>Entre em Contato</h1>
                    <form id="contact-form" name="contact_form" class="contact-form style-five" action="contato.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <label>Nome</label>
                                    <input name="name" class="form-control" value="" placeholder="" required type="text">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control required email" value="" placeholder="" required  type="email">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <label>Telefone</label>
                                    <input name="phone" class="form-control" value="" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-md-6 column">
                                <div class="form-group">
                                    <label>Assunto</label>
                                    <input name="subject" class="form-control" value="" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="col-md-12 column">
                                <div class="form-group">
                                    <label>Mensagem</label>
                                    <textarea name="message" class="form-control textarea required" placeholder="" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="contact-section-btn">
                            <div class="form-group style-two">
                                <input id="form_botcheck" name="form_botcheck" class="form-control" value="" type="hidden">
                                <button class="bttn" name="submit" type="submit" data-loading-text="Please wait...">Enviar Agora</button>
                            </div>
                        </div>
                    </form>
                    <?php

                    if(isset($_POST['submit'])){

// Admin receives email through this code

                        $sender_name = $_POST['name'];

                        $sender_email = $_POST['email'];

                        $sender_subject = $_POST['subject'];

                        $phone = $_POST['phone'];

                        $sender_message = $_POST['message'];

                        $receiver_email = "contato@alcirperito.com.br";

                        mail($receiver_email,$sender_name,$sender_subject,$sender_message,$sender_email, $phone);

// Send email to sender through this code

                        $email = $_POST['email'];

                        $subject = "Bem Vindo a AR Pericia";

                        $msg = "Responderemos em Breve, Obrigado pelo contato";

                        $from = "contato@alcirperito.com.br";

                        mail($email,$subject,$msg,$from);

                        echo "<h2 align='center'>Your message has been sent successfully</h2>";

                    }


                    ?>

                </div>
            </div>
            <div class="col-lg-5 mb-md-5 pl-lg-5">
                <ul class="contact-info-list">
                    <li><span class="fa fa-map"></span><b><?php echo $title_endereco;?></b>
                        <p>
                            <?php echo nl2br($texto1); ?>
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.9880821811557!2d-43.95020738557065!3d-19.924907043295395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfa94548c7361bae6!2sAlcirperito!5e0!3m2!1spt-BR!2sbr!4v1543771522584"
                                width="300" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </li>

                    <li><span class="fa fa-map"></span><b><?php echo $title_endereco2;?></b>
                        <p>
                            <?php echo nl2br($texto2); ?>
                        </p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.07921666233!2d-40.293798985562205!3d-20.296987955066257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb817ec5b4b829d%3A0x2467dd489f18eb47!2sR.+Afonso+Cl%C3%A1udio%2C+32+-+2%C2%BA+andar+-+Praia+do+Canto%2C+Vit%C3%B3ria+-+ES%2C+29055-570!5e0!3m2!1spt-BR!2sbr!4v1543771320850"
                                width=300" height="100" frameborder="0" allowfullscreen>
                        </iframe>
                    </li>

                    <li><span class="fa fa-envelope"></span><b><?php echo $title_email;?></b>
                       <?php echo nl2br($email);?>
                    </li>
                    <li><span class="fa fa-phone"></span><b><?php echo $title_cel;?></b>
                        <?php echo nl2br($cel); ?> <i class="fab fa-whatsapp"></i> </li>
                </ul>
            </div>

        </div>

    </div>
</div>
<!-- Inner Page Wrapper End -->

<!-- footer -->
<?php
include ('includes/db.php');
include ('includes/footer.php');

?>



<script src="js/bootstrap.min.js"></script>
<script src="js_arle/script.js"></script>
</body>
</html>