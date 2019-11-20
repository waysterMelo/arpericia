<?php

 $db = mysqli_connect("localhost", "root", "deus", "u728536737_teste");

function getRealIp(){
    switch(true){
        case (!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
        case (!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
        case (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
        default : return $_SERVER['REMOTE_ADDR'];
    }
}

function getServices(){
       global $db;
                            $sql = "select * from coluna1";
                            $query = mysqli_query($db, $sql);
                            while ($row=mysqli_fetch_array($query)){
                                $title = $row['titulo'];
                                $descricao = $row['descricao'];



                            }

}

function getsliderAR(){
    global $db;
    $sql = "select * from ar_slider limit 0,1";
    $query = mysqli_query($db, $sql);
    $rs=mysqli_fetch_array($query);
        $img1 = $rs['imagem'];



}

function ultimosCursos(){
    global $db;
    $sql = "select * from cursos order by id_cursos DESC limit 0,1";
    $query = mysqli_query($db, $sql);
    while($i=mysqli_fetch_array($query)){
        $id_curso = $i['id_cursos'];
        $titulo = $i['titulo'];
        $preview = $i['objetivo'];

        echo "                   
                        <div class=\"col-md-6 mx-auto col-lg-3 no-padding\" >
                <div class=\"featured-box active\">
                    <span class=\"fas fa-award\"></span>
                    <h5>$titulo</h5>
                    <p>$preview</p>
                    <a href='detalhes_curso.php?curso_id=$id_curso' class=\"bttn\">mais detalhes</a>
                </div>
            </div>";
    }



    $sql2 = "select * from cursos order by id_cursos DESC limit 1,3";
    $query2 = mysqli_query($db, $sql2);
    while($row=mysqli_fetch_array($query2)){
        $id_curso = $row['id_cursos'];
        $titulo = $row['titulo'];
        $preview = $row['objetivo'];

        echo "                   
                        <div class=\"col-md-6 mx-auto col-lg-3 no-padding\">
                <div class=\"featured-box\">
                    <span class=\"fa fa-book\"></span>
                    <h5>$titulo</h5>
                    <p>$preview</p>
                    <a href='detalhes_curso.php?curso_id=$id_curso' class=\"bttn\">mais detalhes</a>
                </div>
            </div>";
    }
}

function txtSobreNos(){
    global $db;
    $sql = "select * from texto_sobreNos";
    $query = mysqli_query($db, $sql);
    while ($result = mysqli_fetch_array($query)){
        $sobre = $result['texto'];
        $sobreF = nl2br($sobre);

        echo "<h4 class=\"lead text-center my-5\">$sobreF</h4>";
    }
}

function get_sobreImg(){
    global $db;
    $sql ="select * from sobreNos";
    $query = mysqli_query($db,$sql);
    while ($result=mysqli_fetch_array($query)){
        $img = $result['imagem_sobre'];

        echo "<img src=\"css/imagens/$img\" alt=\"Escritorio\" class=\"img-fluid img-thumbnail py-2\" style=\" width: 100%; max-height: 300px; overflow: auto\">";
    }
}


