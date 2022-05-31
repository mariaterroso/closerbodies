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

        <!-- Submit button -->
        <?php
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $sqlCheckUser = "SELECT * FROM collection WHERE user_email='" . $email . "'";
            $resultCheckUser = $conn->query($sqlCheckUser);

            $scannedCartaz = $_POST['scannedCartaz'];

            if (mysqli_num_rows($resultCheckUser) > 0) {

                $sqlCartaz = "UPDATE `collection` SET `access`='1' 
                               WHERE `user_email`='" . $email . "' AND `cartazNumber`='" . $scannedCartaz . "';"; 
                $conn->query($sqlCartaz);

                ?>

                <div class="row box-color p-2">
                    <a href="./collected.php" class="text-decoration-none">
                        <i class="fa fa-arrow-left text-white">&nbsp; BACK</i>
                    </a>
                </div>

                <div class="row p-3 my-2">
                    <img src="./img/Group.svg" class="img-fluid w-25">
                </div>
                <div class="row mb-1">
                    <div class="d-flex justify-content-center flex-column text-danger">
                        <div class="text-uppercase text-center fw-bolder" style="font-size: 40px;">poster scaneado!</div><br>
                    </div>
                </div>
                <?php
                echo "You successfully scanned the poster number " . $scannedCartaz;

                ?>

                <form method="POST" action="./collected.php">
                    <input type="hidden" value="<?php echo $email; ?>" name="emailForCollection">

                    <div class="d-flex justify-content-center">
                        <button type="submit" name="checkCollected" class="btn btn-danger btn-block mb-2">Ver colectados</button>
                    </div>
                </form>

                <?php

            } else {

                ?>

                <div class="row box-color p-2">
                    <a href="./index.php" class="text-decoration-none">
                        <i class="fa fa-arrow-left text-white">&nbsp; VOLTAR</i>
                    </a>
                </div>

                <div class="row p-3 my-2">
                    <img src="./img/Group.svg" class="img-fluid w-25">
                </div>
                <div class="row mb-1">
                    <div class="d-flex justify-content-center flex-column text-danger">
                        <div class="text-uppercase text-center fw-bolder" style="font-size: 40px;">poster scaneado!</div><br>
                    </div>
                </div>

                <?php

                echo "Scaneaste com sucesso o poster número " . $scannedCartaz . " e o teu email está agora registado e pronto para participar. 
                Sempre que scaneares um novo poster, por favor utiliza este email:<b> $email </b>";

                $sql = "INSERT INTO `user` (`email`, `name`) VALUES ('" . $_POST['email'] . "', 'User')";
                $result = $conn->query($sql);


                $accessCartaz1 = '0';
                if ($scannedCartaz == '1') {
                    $accessCartaz1 = '1';
                }
                $sqlCartaz1 = "INSERT INTO `collection` (`user_email`, `cartazNumber`, `description`, `access`) 
                VALUES ('" . $_POST['email'] . "', '1', 'Cartaz 1', '" . $accessCartaz1 . "')";
                $conn->query($sqlCartaz1);


                $accessCartaz2 = '0';
                if ($scannedCartaz == '2') {
                    $accessCartaz2 = '1';
                }
                $sqlCartaz2 = "INSERT INTO `collection` (`user_email`, `cartazNumber`, `description`, `access`) 
                VALUES ('" . $_POST['email'] . "', '2', 'Cartaz 2', '" . $accessCartaz2 . "')";
                $conn->query($sqlCartaz2);


                $accessCartaz3 = '0';
                if ($scannedCartaz == '3') {
                    $accessCartaz3 = '1';
                }
                $sqlCartaz3 = "INSERT INTO `collection` (`user_email`, `cartazNumber`, `description`, `access`) 
                VALUES ('" . $_POST['email'] . "', '3', 'Cartaz 3', '" . $accessCartaz3 . "')";
                $conn->query($sqlCartaz3);


                $accessCartaz4 = '0';
                if ($scannedCartaz == '4') {
                    $accessCartaz4 = '1';
                }
                $sqlCartaz4 = "INSERT INTO `collection` (`user_email`, `cartazNumber`, `description`, `access`) 
                VALUES ('" . $_POST['email'] . "', '4', 'Cartaz 4', '" . $accessCartaz4 . "')";
                $conn->query($sqlCartaz4);
            }
        }
        ?>

    </main>
</body>

</html>