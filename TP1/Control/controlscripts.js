function esVacio(){
}

function validarOperacion(){
    operacion = document.getElementById("operacion").value;
    factoruno = document.getElementsByName("1erfactor").value;
    factordos = document.getElementsByName("2dofactor").value;
    if (operacion == "/"){
        if (factordos == 0){
            alert ("No es posible dividir por cero");
            return false;
        }
    } else {
        return true;
    }
}