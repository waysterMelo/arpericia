<?php

include '../../includes/db.php';


if(isset($_POST['admin_login'])){

    $admin_email = $_POST['email'];

    $admin_pass =  $_POST['senha'];

    $get_admin = "select * from users where email='$admin_email' AND senha='$admin_pass'";

    $run_admin = mysqli_query($con, $get_admin);

    $count = mysqli_num_rows($run_admin);

    if($count > 0){
        session_start();
        $_SESSION['email']= $_POST['email'];
        $_SESSION['senha']= $_POST['senha'];

        echo "<script>alert('LOGIN FEITO COM SUCESSO')</script>";
        echo "<script>window.open('../painel.php?initial','_self')</script>";
    }
    else {

        echo "<script>alert('EMAIL OU SENHA ESTAO ERRADOS')</script>";
        echo "<script>window.open('../login.php','_self')</script>";

    }

}
