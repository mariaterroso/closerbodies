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

<?php
include("connection.php");

if (isset($_GET['cartaz'])) {
    $cartazScanned = $_GET['cartaz'];
}
?>

<body class="gradient-animation">
    <main class="container">
        <div class="row p-2">
            <a href="./index.php" class="text-decoration-none">
            <i class="fa fa-arrow-left text-back" style="font-size: 25px;">&nbsp; VOLTAR</i>
            </a>
        </div>

        <div class="row p-3 my-2 d-flex justify-content-center">
        <img src="./img/Group.svg" class="img-fluid angry-animate-2" style=" filter: invert(100%) sepia(100%) saturate(0%) hue-rotate(201deg) brightness(106%) contrast(106%); width: 60%;" >
        </div>

        <div class="row mb-1">
            <div class="d-flex justify-content-center flex-column text-color">
                <div class="text-uppercase text-center fw-bolder" style="font-size: 40px;">participar</div><br>
            </div>
        </div>

        <form method="POST" action="./partipateSuccess.php">
            <div class="row mx-1">
                <div class="d-flex justify-content-center text-color">
                    <h4>Introduz o teu email</h4>
                </div>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="row my-4">
                <div class="d-flex">
                    <div class="mx-2 d-flex align-items-center">
                        <input class="form-check-input mt-0" type="checkbox" value="" aria-label="Checkbox for following text input">
                    </div>
                    <div class="d-flex align-items-center text-color">
                        Aceito que o Festival Circular me mencione nas redes sociais se for um dos vencedores
                    </div>
                </div>
            </div>

            <input type="hidden" value="<?php echo $cartazScanned; ?>" name="scannedCartaz">

            <div class="d-flex justify-content-center">
                <button type="submit" name="submit" class="Buttons">Participar</button>
            </div>
        </form>

    </main>
</body>

</html>