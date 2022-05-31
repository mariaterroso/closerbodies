<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./css/styles.css">
    <link rel="icon" href="./img/Group.svg" type="image/svg+xml">

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#myModal').modal('show');
        });
    </script>
</head>


<?php
include("connection.php");
?>

<body class="gradient-animation">
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

            <div class="row box-color p-2">
                <a href="./index.php" class="text-decoration-none">
                    <i class="fa fa-arrow-left text-white">&nbsp; VOLTAR</i>
                </a>
            </div>

            <div class="row p-3 my-2">
                <img src="./img/Group.svg" class="img-fluid angry-animate-2" style="width: 37%;">
            </div>

            <div class="row mb-3">
                <div class="d-flex justify-content-center flex-column text-danger">
                    <div class="text-uppercase text-center fw-bolder" style="font-size: 40px;">colectado</div><br>
                </div>
            </div>

            <div class="row mb-3">
                <?php
                $sqlCount = "SELECT user_email, access FROM collection WHERE user_email = " . "'" . $userEmail . "' AND access = " . '1' . ";";
                $resultCount = $conn->query($sqlCount);

                // if the user has 3 scanned posters
                if (mysqli_num_rows($resultCount) == 4) {
                ?>
                    test
                    <div class="modal hide fade" id="myModal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-16by9 d-flex justify-content-center">
                                        <iframe class="embed-responsive-item" src="./video/dancebw.mov" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
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
                    "quote1" => "Este poster encontra-se na casa dos campeões.",
                    "quote2" => "Este poster encontra-se no alto, perto de um lugar religioso.",
                    "quote3" => "Este poster encontra-se numa zona de moda.",
                    "quote4" => "Este poster encontra-se a navegar perto do local do festival.",
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

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>