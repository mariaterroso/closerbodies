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
?>

<body class="gradient">
    <main class="container">

        <!-- Check if the user has logged in with success -->
        <?php
        $userEmail = "";

        if (isset($_POST['checkCollected'])) {
            $userEmail = $_POST['emailForCollection'];

        } else if (isset($_POST['normalCheck'])) {
            $userEmail = $_POST['formEmail'];
        }

        $sqlLogin = "SELECT email FROM user WHERE email = " . "'" . $userEmail . "';";
        $resultLogin = $conn->query($sqlLogin);



        ?>

        <?php

        if ((mysqli_num_rows($resultLogin) > 0)) {
        ?>

            <div class="row bg-secondary p-2">
                <a href="./index.php" class="text-decoration-none">
                    <i class="fa fa-arrow-left text-white">&nbsp; VOLTAR</i>
                </a>
            </div>

            <div class="row p-3 my-2">
                <img src="./img/Group.svg" class="img-fluid w-25">
            </div>

            <div class="row mb-3">
                <div class="d-flex justify-content-center flex-column text-danger">
                    <div class="text-uppercase text-center fw-bolder" style="font-size: 40px;">collectado</div><br>
                </div>
            </div>

            <div class="row mb-3">
                <?php
                    $sqlCount = "SELECT user_email, access FROM collection WHERE user_email = " . "'" . $userEmail . "' AND access = " . '1' . ";";
                    $resultCount = $conn->query($sqlCount);

                    // if the user has 3 scanned posters
                    if (mysqli_num_rows($resultCount) == 4) {
                        ?>
                                <div class="embed-responsive embed-responsive-16by9 d-flex justify-content-center">
                                    <iframe class="embed-responsive-item" src="./video/DanceVideo.mp4" allowfullscreen></iframe>
                                </div>
                        <?php
                    }
                ?>
            </div>

            <div class="row mx-1">
                <div class="col-6 p-1">
                    <?php
                    $sql1 = "SELECT id, user_email, cartazNumber, description, access FROM collection
                     WHERE user_email = '" . $userEmail . "'" . " AND cartazNumber = 1 AND access = 1";
                    $result1 = $conn->query($sql1);

                    if ($result1->num_rows > 0) {
                    ?>
                        <img src="./img/Cartaz1.jpg" class="img-fluid">
                    <?php

                    } else {
                    ?>
                        <img src="./img/CartazEmpty.png" class="img-fluid">
                    <?php
                    }
                    ?>
                </div>
                <div class="col-6 p-1">
                    <?php
                    $sql2 = "SELECT id, user_email, cartazNumber, description, access FROM collection
                    WHERE user_email = '" . $userEmail . "'" . " AND cartazNumber = 2 AND access = 1";
                    $result2 = $conn->query($sql2);
                    if ($result2->num_rows > 0) {
                    ?>
                        <img src="./img/Cartaz2.jpg" class="img-fluid">
                    <?php

                    } else {
                    ?>
                        <img src="./img/CartazEmpty.png" class="img-fluid">
                    <?php
                    }
                    ?>
                </div>
                <div class="col-6 p-1">
                    <?php
                    $sql3 = "SELECT id, user_email, cartazNumber, description, access FROM collection
                    WHERE user_email = '" . $userEmail . "'" . " AND cartazNumber = 3 AND access = 1";
                    $result3 = $conn->query($sql3);
                    if ($result3->num_rows > 0) {
                    ?>
                        <img src="./img/Cartaz3.jpg" class="img-fluid">
                    <?php

                    } else {
                    ?>
                        <img src="./img/CartazEmpty.png" class="img-fluid">
                    <?php
                    }
                    ?>
                </div>
                <div class="col-6 p-1">
                    <?php
                    $sql4 = "SELECT id, user_email, cartazNumber, description, access FROM collection
                    WHERE user_email = '" . $userEmail . "'" . " AND cartazNumber = 4 AND access = 1";
                    $result4 = $conn->query($sql4);
                    if ($result4->num_rows > 0) {
                    ?>
                        <img src="./img/Cartaz4.jpg" class="img-fluid">
                    <?php

                    } else {
                    ?>
                        <img src="./img/CartazEmpty.png" class="img-fluid">
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div>
                <?php
                $randomQuotes = [
                    "quote1" => "This is a random quote greigierjo igerog hoerhg eruh",
                    "quote2" => "This is another random quote goirngo jerigj ioerjog ierj",
                    "quote3" => "This is almost the last random quote goeirjhgo ergjeorijg",
                    "quote4" => "This is the last random quote gori ogierjo gjerio gjoerig jioerj gio",
                ];

                $randomKey = $random_keys = array_rand($randomQuotes, 3);
                ?>

                <div class="d-flex justify-content-center flex-column text-danger">
                    <div class="text-uppercase text-center fw-bolder">
                        <?php echo $randomQuotes[$random_keys[0]]; ?>
                    </div>
                </div>
            </div>

        <?php
        } else {
            header('Location: signin.php');
            exit();
        }
        ?>

    </main>
</body>

</html>