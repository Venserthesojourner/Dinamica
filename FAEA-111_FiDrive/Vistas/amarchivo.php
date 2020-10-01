<?php
$title = "ALTA Y MODIFICACION DE ARCHIVOS";
$cardtitle = "Alta/Modificacion de Archivo";
include_once ('../Vistas/Basicframe/header.php');
?>



<form action="exito.php" method="post">
<div class="row" style="padding:15px">

<div class="col-md-3">
<div class="form-group">
    Nombre
</div>
</div>
<div class="col-md-6">
<div class="form-group">
    <input type="text" name="" id="" placeholder="1234.png">    
</div>
</div>
</div>

<div class="row" style="padding:15px">
<div class="col-md-9">
<span>Archivo</span>
<div class="form-group form-check" style="border-style: inset; border-radius:5px">
<input type="file" name="archivo" id="archive">
</div>
</div>
</div>

<div class="row" style="padding:15px">

<div class="col-md-3">
Descripci&oacute;n
</div>
<div class="col-md-6">
<div class="form-group">   
    <textarea name="" id="" cols="100" rows="10"></textarea>
</div>
</div>
</div>
<div class="row" style="padding:15px">
<div class="col-md-9">
<span>Tipo de Usuario</span>
<div class="form-group" style="border-style: inset; border-radius:5px; padding:15px">    
    <label for="">Administrador</label>
    <input type="radio" name="" id="">
    <label for="">Usuario</label>
    <input type="radio" name="" id="">
    <label for="">Visitante</label>    
    <input type="radio" name="" id="">
</div>
</div>

<div class="col-md-9">
<span>Icono Tipo Archivo</span>
<div class="form-group form-check" style="border-style: inset; border-radius:5px">
Imagen 
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10l2.224-2.224a.5.5 0 0 1 .61-.075L8 11l2.157-3.02a.5.5 0 0 1 .76-.063L13 10V2a1 1 0 0 0-1-1H4z"/>
  <path fill-rule="evenodd" d="M6.502 7a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
</svg>
<input type="checkbox" name="" id="">
Zip 
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-zip" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
  <path fill-rule="evenodd" d="M6.5 7.5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v.938l.4 1.599a1 1 0 0 1-.416 1.074l-.93.62a1 1 0 0 1-1.109 0l-.93-.62a1 1 0 0 1-.415-1.074l.4-1.599V7.5zm2 0h-1v.938a1 1 0 0 1-.03.243l-.4 1.598.93.62.93-.62-.4-1.598a1 1 0 0 1-.03-.243V7.5z"/>
  <path d="M7.5 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5zm-1 1H8v1H6.5zm1 1H9v1H7.5V5z"/>
</svg>
<input type="checkbox" name="" id="">
Doc 
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M4 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H4z"/>
  <path fill-rule="evenodd" d="M4.5 10.5A.5.5 0 0 1 5 10h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
</svg>
<input type="checkbox" name="" id="">
PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <input type="checkbox" name="" id="">
XLS <i class="fa fa-file-excel-o" aria-hidden="true"></i> <input type="checkbox" name="" id="">
</div>
</div>

<input type="hidden" name="IDarchivo" value="">

</form>
<div class="col-md-9">
<input type="submit" class="btn btn-outline-info" value="Enviar">
</div>
</div><!-- row -->


</div>
</div>


<?php
include_once ('../Vistas/Basicframe/footer.php');
?>