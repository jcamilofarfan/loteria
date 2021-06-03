<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data ["titulo"]; ?></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
        <a href="#" class="brand-logo">Loteria </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!-- <li><a href="index.php">Home</a></li> -->
            <li><a href="index.php?c=cards">Tarjetas de Loteria</a></li>
            <li><a href="index.php?c=objects">Items de la Loteria</a></li>
        </ul>
        </div>
    </nav>