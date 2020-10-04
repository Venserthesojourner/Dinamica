

function validarOperacion(){    
    operacion = document.getElementById("operaciones").value;
    
    factoruno = document.getElementById("1erfactor").value;
    
    factordos = document.getElementById("2dofactor").value;   
    
    respuesta = true;
    if (operacion == "/"){
        if (factordos == 0){
            alert ("No es posible dividir por cero");
            respuesta = false;
        }

    }
    
    return respuesta;
}

function isChecked(){
    check = document.getElementById("checkrol").checked;
    alert (check);   
    if (check){
        document.getElementById("rol").value = 1;
    }
    return true;
}

function reveal(clave) {
    if (clave == 0) {
      if (document.getElementById("tp1").style.visibility == "hidden") {
        document.getElementById("tp1").style.visibility = "visible";
        document.getElementById("tp2").style.visibility = "hidden";
      } else {
        document.getElementById("tp1").style.visibility = "hidden";
      }
    } else {
      if (document.getElementById("tp2").style.visibility == "hidden") {
        document.getElementById("tp2").style.visibility = "visible";
        document.getElementById("tp1").style.visibility = "hidden";
      } else {
        document.getElementById("tp2").style.visibility = "hidden";
      }
    }
  }

  (function() {
    'use strict';
    window.addEventListener('load', function() {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();



  function cargaHoras(id){
    
    var horas = 1;
    while (horas <25){
      opcion = document.createElement("option");
      texto = document.createElement("p");
      opcion.value = horas;
      texto.innerHTML = horas
      opcion.appendChild(texto);
      select = document.getElementById(id);
      select.appendChild(opcion);
      horas++;
    }
  }
