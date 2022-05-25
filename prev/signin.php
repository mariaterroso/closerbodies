<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/Group.svg" type="image/svg+xml">
</head>


<?php
include("connection.php");
?>

<body class="gradient">
    <main class="container">
        <div class="row bg-secondary p-2">
            <a href="./index.php" class="text-decoration-none">
                <i class="fa fa-arrow-left text-white">&nbsp; VOLTAR</i>
            </a>
        </div>

        <div class="row p-3 my-2 d-flex justify-content-center">
            <img src="./img/Group.svg" class="img-fluid w-25">
        </div>

        <form action="./collected.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-2">
                <input type="email" id="formEmail" name="formEmail" class="form-control" />
                <label class="form-label" for="formEmail">Email</label>
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-danger btn-block mb-2" name="normalCheck">Ver Colectados</button>
            </div>
        </form>
    </main>
</body>

</html>