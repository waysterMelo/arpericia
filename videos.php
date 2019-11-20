<?php
include ('includes/db.php');
$sql = "select * from pagina_videos";
$query = mysqli_query($con,$sql);
$rs = mysqli_fetch_array($query);
$title_page = $rs['titulo'];
$img = $rs['img_fundo'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Algumas dicas uteis</title>
    <link rel="icon" href="css/imagens/home.ico">
    
    <link href="css/bootstrap.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">

    <link rel="stylesheet" href="css/estilo2.css">

    <link rel="stylesheet" href="css/style.css">

    <link href="css/bootstrap-select.css" rel="stylesheet" />

	<link href="css/youtube_api.css" rel="stylesheet" />

    <link rel="stylesheet" href="css/aos.css">
    <script src="js/aos.js"></script>

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

                            <li class="nav-item">
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
                            <li class="nav-item">
                                <a class="nav-link" href="livros.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Livros
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="gallery.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Galeria
                                </a>
                            </li>
                            <li class="nav-item active ">
                                <a class="nav-link" href="videos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Videos
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="materias_diversos.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Materiais Diversos
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contato.php" role="button" aria-haspopup="true"
                                   aria-expanded="false">
                                    Contato
                                </a>

                            </li>
                            <li class="nav-item">
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-image: url('css/imagens/<?php echo $img; ?>'); background-size: cover; height: 350px; background-attachment: fixed;">
    <h1 class="text-center text-white pt-5 font-weight-bold "><?php echo $title_page; ?></h1>
    <ul class="page-breadcrumb" style="margin-top: 60px">
        <li><a href="index.php">Home</a></li>
        <li>videos</li>
    </ul>
</div>


    <div class="all-content-wrapper">
	
		<section class="container-fluid">
			<div class="form-group custom-input-space has-feedback">

				<div class="page-body clearfix">
					<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-body">
									<div id="my_video_list">
                                        <?php

                                        $API_Url = 'https://www.googleapis.com/youtube/v3/';
                                        $API_Key = 'AIzaSyCMgI3bMFiloNI-eJCTZwL_Dncbg0EWSZc';


                                        // If you don't know the channel ID see below
                                        $channelId = 'UC3FscSih6Q1YpFNhrxGqzfw';

                                        $parameter = [
                                            'id'=> $channelId,
                                            'part'=> 'contentDetails',
                                            'key'=> $API_Key
                                        ];
                                        $channel_URL = $API_Url . 'channels?' . http_build_query($parameter);
                                        $json_details = json_decode(file_get_contents($channel_URL), true);

                                        $playlist = $json_details['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

                                        $parameter = [
                                            'part'=> 'snippet',
                                            'playlistId' => $playlist,
                                            'maxResults'=> '50',
                                            'key'=> $API_Key
                                        ];
                                        $channel_URL = $API_Url . 'playlistItems?' . http_build_query($parameter);
                                        $json_details = json_decode(file_get_contents($channel_URL), true);

                                        $my_videos = [];
                                        foreach($json_details['items'] as $video){
                                            //$my_videos[] = $video['snippet']['resourceId']['videoId'];
                                            $my_videos[] = array( 'v_id'=>$video['snippet']['resourceId']['videoId'], 'v_name'=>$video['snippet']['title'] );
                                        }

                                        while(isset($json_details['nextPageToken'])){
                                            $nxt_page_URL = $channel_URL . '&pageToken=' . $json_details['nextPageToken'];
                                            $json_details = json_decode(file_get_contents($nxt_page_URL), true);
                                            foreach($json_details['items'] as $video)
                                                $my_videos[] = $video['snippet']['resourceId']['videoId'];
                                        }
                                        //print_r($my_videos);

                                        foreach($my_videos as $video){

                                            if(isset($video)){

                                                echo '<a href="https://www.youtube.com/watch?v='. $video['v_id'] .'" style="background: url(\'https://img.youtube.com/vi/'. $video['v_id'] .'/mqdefault.jpg\')">
														<div>'. $video['v_name'] .'</div>
												</a>';
                                            }
                                        }


                                        ?>

									</div>

								</div>
							</div>
						</div>

						<div id="my_player"><div></div></div>

					</div>
				</div>
			</div>
		</section>
    </div>



<!-- footer -->
<footer class="" style="border:5px solid darkgreen !important; background-color: #dadfe2">
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
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="fab fa-facebook" style="color:darkgreen;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="fab fa-twitter" style="color:darkgreen;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
                                    <i class="fab fa-instagram" style="color:darkgreen;"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="social-icon-outline" href="#">
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
                        <span class="text-success">ALCIR PERITO</span> &copy; 2018 Todos Os Direitos Reservados</p>
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


	<!-- Jquery Core Js -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Select Js -->
    <script src="js/bootstrap-select.js"></script>
	
	<script>

	$(document).ready(function(e){

		$('#my_video_list a').on('click',function(e){

		e.preventDefault();

		var video_url = $(this).attr('href');

		
		var video_id = video_url.substring(video_url.search('=')+1,video_url.length);
		
		$('#my_player DIV').html('<iframe width="560" height="315" src="https://www.youtube.com/embed/' + video_id + '" frameborder="0" allowfullscreen></iframe>');

		  $('#my_player').fadeIn(500);

		});


		$('#my_player').on('click',function(e){
			$('#my_player').fadeOut(500);
			$('#my_player DIV').empty();
		});


	});
	</script>

<script src="js_arle/script.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
