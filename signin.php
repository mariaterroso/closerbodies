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

<body class="gradient-animation">
    <main class="container" style="height:100%">
        <div class="row p-2">
            <a href="./index.php" class="text-decoration-none">
                <i class="fa fa-arrow-left text-back" style="font-size: 25px;">&nbsp; VOLTAR</i>
            </a>
        </div>

        <div class="row p-3 my-2 d-flex justify-content-center">
        <img src="./img/Group.svg" class="img-fluid angry-animate-2" style="width: 60%; filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(201deg) brightness(106%) contrast(106%);" >
        </div>
        <form action="./collected.php" method="POST">
            <!-- Email input -->
            <div class="d-flex justify-content-center">
        <p class="text-mail" style="width: 20%;" > Email </p>
        </div>
            <div class="form-outline mb-2">
                <input type="email" id="formEmail" name="formEmail" class="form-control" />
                <label class="form-label text-color" for="formEmail"></label>
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="Buttons" name="normalCheck">Ver Colectados</button>
        </form>
    </div>
    </main>
</body>

</html>