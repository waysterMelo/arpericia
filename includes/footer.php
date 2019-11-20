<!-- footer -->
<footer class="" style="border:5px solid darkgreen !important; background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
    <div class="py-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="mb-5 mb-md-0 text-center text-md-left ">

                        <!-- logo -->
                        <?php
                        $sql = "select * from footer_img1";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $imagem_footer = $rs['imagem'];
                        $texto_footer1 = $rs['text'];
                        ?>
                        <img src="css/imagens/<?php echo $imagem_footer; ?>" alt="Logo" class="img-fluid img-thumbnail mb-30">
                        <p class="text-dark mb-30">
                            <?php
                            echo $texto_footer1;
                            ?>
                        </p>
                        <!-- social icon -->
                        <?php
                        include ('includes/db.php');
                        $sql = "select * from social_media";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $face = $rs['facebook'];
                        $instagram = $rs['instagram'];
                        $link = $rs['linkedlin'];
                        ?>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" target="_blank" href="<?php echo $face;?>">
                                    <i class="fab fa-facebook" style="color:darkgreen;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" target="_blank" href="<?php echo $instagram;?>">
                                    <i class="fab fa-instagram" style="color:darkgreen;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" target="_blank" href="<?php echo $link;?>">
                                    <i class="fab fa-linkedin" style="color:darkgreen;"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <h4 class="text-dark mb-4">Menu</h4>
                    <ul class="">
                        <li class="mb-3">
                            <i class="fa fa-arrow-circle-right"></i> <a href="index.php" class="text-dark">AR Pericia</a>
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-arrow-circle-right"></i>  <a href="arletreinamentos.php" class="text-dark">Cursos e Treinamentos</a>
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-arrow-circle-right"></i>  <a href="livros.php" class="text-dark">Livros</a>
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-circle-right"></i>  <a href="contato.php" class="text-dark">Contato</a>
                        </li>
                    </ul>
                </div>
                <!-- footer links -->
                <div class="col-lg-2 col-md-4 col-6"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                    <h4 class="text-dark mb-4">Links Rapidos</h4>
                    <ul class="">
                        <li class="mb-3">
                            <a href="videos.php" class="text-dark">
                                <i class="fa fa-arrow-circle-right"></i>
                                Videos</a>
                        </li>
                        <li class="mb-3">
                            <a href="materias_diversos.php" class="text-dark">
                                <i class="fa fa-arrow-circle-right"></i>
                                Materias</a>
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-arrow-circle-right"></i>  <a href="gallery.php"
                              class="text-dark">Galeria</a>
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-arrow-circle-right"></i>  <a href="admin/login.php"
                             class="text-dark">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- subscribe form -->
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                    <div class="mb-5 mb-md-0 text-center text-md-left ">

                        <!-- logo -->
                        <?php
                        $sql = "select * from footer_img2";
                        $query = mysqli_query($con, $sql);
                        $rs = mysqli_fetch_array($query);
                        $imagem_footer2 = $rs['imagem'];
                        $texto_footer2 = $rs['texto'];
                        ?>
                        <img src="css/imagens/<?php echo $imagem_footer2; ?>" alt="Logo" class="img-fluid img-thumbnail mb-30">
                        <p class="text-dark mb-30">
                            <?php echo $texto_footer2; ?>
                        </p>
                        <!-- social icon -->

                    </div>
                </div>
    </div>
        </div>
    </div>
    <!-- copyright -->
    <div class="pt-4 pb-3 position-relative" style="background-color: #242c42; border-top: 5px solid darkgreen;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <p class="text-white text-center text-md-left">
                        <span class="text-success">ALCIR PERITO</span> &copy; 2019 Todos Os Direitos Reservados</p>
                </div>
                <div class="col-lg-6 col-md-3">
                    <ul class="list-inline text-center text-md-right">
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                        </li>
                        <li class="list-inline-item mx-lg-3 my-lg-0 mx-2 my-2">
                        </li>
                        <li class="list-inline-item ml-lg-3 my-lg-0 ml-2 my-2 ml-0">
                            <a class="font-secondary text-white" target="_blank">By: Wayster De Mello</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js_arle/script.js"></script>
</body>
</html>