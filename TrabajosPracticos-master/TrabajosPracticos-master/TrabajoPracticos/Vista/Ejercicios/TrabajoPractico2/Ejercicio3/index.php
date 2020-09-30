<?php 
$Titulo = " Ejercicio 8"; 
include_once("../../../Estructura/cabecera.php");
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>

    <div class="card text-center">
                <div class="card-header">
                    <span id="tp"> TRABAJO PRACTICO 2 </span>
                </div>

                <div class="card-body">
                    <p class="card-text">
                        a) Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
                        y la password para loguearse. Los datos del formulario son enviados a un script
                        verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
                        arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
                        de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
                        y en caso contrario un mensaje de error.
                        <br>
                        b) Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
                        usuario y la contraseña antes de ser enviados al servidor sino que también debe
                        realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
                        caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
                        letras y números).
                        <br>
                        c) Aplicar Bootstrap.
                    </p>
                </div>

                <div class="card-footer text-muted">
                    <span class="badge badge-secondary">EJ 3</span>
                </div>
            </div>
            <br>

            <form class="form-signin" action="verificaPass.php" method="POST" id="ejecicio" name="tp2ej3">
                <h1 class="h3 mb-3 font-weight-normal">Login member</h1>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </span>
                    </div>
                    <input type="text" id="username" name="login[username]" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <br>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
                                <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
                            </svg>
                        </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Password" name="login[password]" id="password" aria-label="password" aria-describedby="basic-addon1">
                </div>
                <br>
                <button class="btn btn-lg btn-success btn-block" type="submit">Login</button>
                <p class="mt-5 mb-3 text-muted">Claramente esto lo hice yo solito sin copiarme de nada...</p>
            </form>
</main>
    <?php 
        include_once("../../../Estructura/pie.php");
    ?>