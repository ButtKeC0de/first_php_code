<?php

    session_start();
    if (isset($_SESSION["usuario"])) {
 
        header("Location: ../index.php");
        exit();
    }
?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hOME</title>
</head>
<body>
        <H2>Bem vindo</H2>
        <p>usuario logado :
            <?php
                echo $_SESSION["usuario"];
            ?>
        </p>
        <a href=logout.php">Sair</a>
</body>
</html>