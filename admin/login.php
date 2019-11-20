<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link rel="icon" href="../css/imagens/admin.ico">


    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
<form class="form-signin border bg-light" method="post" action="functions/login.php">
    <img class="mb-4" src="../css/imagens/ar.png" alt="" width="272" height="72" class="img-fluid img-thumbnail">
    <h1 class="h3 mb-3 font-weight-normal">Por Favor Faça Login</h1>
    <label for="inputEmail" class="sr-only">Email </label>
    <input type="text"  class="form-control" placeholder="Email" name="email" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" class="form-control" placeholder="Senha" name="senha" required>
        <button class="btn btn-success btn-md" type="submit" name="admin_login">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy;Alcir Perito 2018-2019</p>
</form>
</body>
</html>
