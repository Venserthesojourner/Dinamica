<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      
    <!-- Optional JavaScript -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="scripts/scripts.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
  </head>
  <body style="background: linear-gradient(337deg, rgba(2,0,36,1) 0%, rgba(222,238,241,1) 35%, rgba(0,212,255,1) 100%);">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  
<div class="col col-md-3"><a class="navbar-brand" href="main.php">Trabajos Practicos: Programacion Web Dinamica</a></div>
<div class="col col-md-4"></div>
<div class="col col-md-5">
<ul class="list-inline">
<div class="row">
  <div class="col col-md-6">
  <li class="list-inline-item"><button class="btn btn-primary btn-sm float:left" onclick="reveal(0)">Practico 1</button></li>
<ul class="pagination" id="tp1" style="visibility:hidden;">
  <li class="page-item"><a class="page-link" href="puntouno_form.php">1</a></li>
  <li class="page-item"><a class="page-link" href="puntodos_form.php">2</a></li>
  <li class="page-item"><a class="page-link" href="puntotres_form.php">3</a></li>
  <li class="page-item"><a class="page-link" href="puntocuatro_form.php">4</a></li>
  <li class="page-item"><a class="page-link" href="puntocinco_form.php">5</a></li>
  <li class="page-item"><a class="page-link" href="puntoseis_form.php">6</a></li>
  <li class="page-item"><a class="page-link" href="puntosiete_form.php">7</a></li>
  <li class="page-item"><a class="page-link" href="puntoocho_form.php">8</a></li>  
  </ul>
  </div>
  <div class="col col-md-6">
  <li class="list-inline-item"><button class="btn btn-primary btn-sm float:left" onclick="reveal(1)">Practico 2</button></li>
  <ul class="pagination" id="tp2" style="visibility:hidden;">
  <li class="page-item"><a class="page-link" href="#">Login</a></li>
  <li class="page-item"><a class="page-link" href="cinema_formulario.php">Cinem@</a></li>
  </ul>
  </div>
</div>
</ul>
</div>
</nav>
<main role="main" class="flex-shrink-0" style="height:800px">
<div class="row">
<aside class="col-md-3 bg-light" id="asider" style="margin-top: 50px;">
  <div class="card">
    <div class="card-head text-center">
    <h3><?php echo $Titulo?></h3>
    <h6><?php echo $subtitulo?></h6>
    <hr>
    </div>
    <div class="card-body">
    <p class="text-primary"><?php echo $enunciado?></p>
    </div>
  </div>
</aside>

<div class="container" style="background-color:whitesmoke; padding:15px; margin-top:30px">

