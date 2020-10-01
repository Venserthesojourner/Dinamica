<?php
include_once("../config.php");
?>

<!doctype html>
<html lang="es">
  <head>
    <title><?php echo $title;?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
  <body>      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- Nav tabs -->
<ul class="nav nav-tabs bg-dark" id="navId">
    <li class="nav-item">
        <a href="main.php" class="nav-link active"><h5 style="font-family:Consolas;font-weight:bold">FAEA-111_FiDrive</h5></a>
    </li>
    <li class="nav-item dropdown" style="padding: 0px;">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="amarchivo.php">Alta/Modificacion</a>
            <a class="dropdown-item" href="compartirarchivo.php">Compartir</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="eliminararchivocompartido.php">Dejar de compartir</a>
            <a class="dropdown-item" href="eliminararchivo.php">Eliminar</a>
        </div>
    </li>
</ul>

<div class="Container" style="height: 800px; padding: 30px 150px; overflow: scroll">
<div class="card" id="cardyb">
<div class="card-header bg-info">
    <b class="fas fa-h1"><?php echo $cardtitle ?></b>
</div>
<div class="card-body bg-light">