<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="scripts/scripts.js"></script>    
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <title><?php $Titulo?></title>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="index.php">Trabajos Practicos: Programacion Web Dinamica</a>
</nav>
<main role="main" class="flex-shrink-0">
<div class="jumbotron">
<div class="row">
<aside class="col-md-3 bg-light">
  <h3><?php echo $Titulo?></h3>
  <h6><?php echo $subtitulo?></h6>
  <p class="text-primary"><?php echo $enunciado?></p>
</aside>