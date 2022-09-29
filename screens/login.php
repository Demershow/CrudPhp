<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/styles/login.css">
</head>

<body>
    <h1>CRUD!</h1>
    <div class="modal-login">
        <h1>Login</h1>
        <form method="POST">
            <div class="mb-4">
                <label class="form-label">Endereço de Email</label>
                <input type="text" class="form-control" name="login" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-4">
                <label class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity></script>
</body>

</html>
<?php
if (!empty($_POST)) {
    $email = $_POST['login'];
    $senha = $_POST['password'];

    if (($email == "admin") && ($senha == "admin")) {
        header('Location:menu.php');
    } else {
        echo "<script>alert('Email ou senha incorreto');</script>";
    }
}
?>