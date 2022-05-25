<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/Group.svg" type="image/svg+xml">
</head>

<body class="gradient">
    <main class="container my-4">
        <div class="row mb-3">
            <div class="d-flex justify-content-center">
                <img src="./img/Group.svg" class="img-fluid w-50">
            </div>
        </div>

        <div class="row mb-1">
            <div class="d-flex justify-content-center flex-column p-3 text-danger">
                <div class="text-uppercase text-center fs-1 fw-bolder">parabéns</div><br>
                <div class="text-uppercase text-center fs-6 fw-bolder">Encontraste 1/4 do Cartaz do Festival Circular!</div>
            </div>
        </div>

        <div class="row">
            <div class="p-4 col-6 d-flex justify-content-center">
                <a href="./participate.php" class="text-decoration-none">
                    <div class="d-flex align-items-center flex-column p-3 mb-2 bg-danger text-white  rounded-3 main-button">
                        <i class="fa fa-gamepad" style="font-size: 50px;"></i>
                        <p>PARTICIPAR</p>
                    </div>
                </a>
            </div>
            <div class="p-4 col-6 d-flex justify-content-center">
                <a href="./signin.php" class="text-decoration-none">
                    <div class="d-flex align-items-center flex-column p-3 mb-2 bg-danger text-white  rounded-3 main-button">
                        <i class="fa fa-check-circle-o" style="font-size: 50px;"></i>
                        <p>COLECTADO</p>
                    </div>
                </a>
            </div>
            <div class="p-4 col-6 d-flex justify-content-center">
                <a href="./awards.php" class="text-decoration-none">
                    <div class="d-flex align-items-center flex-column p-3 mb-2 bg-danger text-white rounded-3 main-button">
                        <i class="fa fa-star" style="font-size: 50px;"></i>
                        <p>PRÉMIOS</p>
                    </div>
                </a>
            </div>
            <div class="p-4 col-6 d-flex justify-content-center">
                <a href="./info.php" class="text-decoration-none">
                    <div class="d-flex align-items-center flex-column p-3 mb-2 bg-danger text-white  rounded-3 main-button">
                        <i class="fa fa-info-circle" style="font-size: 50px;"></i>
                        <p>INFO</p>
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>

</html>