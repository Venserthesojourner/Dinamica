// Esto lo hice siguiendo los ejemplos de esta pagina.
// https://www.solvetic.com/tutoriales/article/1339-validaciones-con-bootstrap-validator/

$('#ejercicio').bootstrapValidator({
    message: 'Este valor no es valido',

	 feedbackIcons: {

		 valid: 'fas fa-check-circle',

		 invalid: 'fas fa-exclamation-circle',

         validating: 'fa fa-times-circle'
         
     },

        fields: {

            numero: {

                validators: {

                    notEmpty: {

                        message: 'Debe ingresar un numero '

                    }, regexp: {

                        regexp: /^[0-9]+$/,
   
                        message: 'El campo solo debe contener números'
   
                    }

                }

            }
        }

    });

    $('#ejercicio2').bootstrapValidator({
        message: 'Este valor no es valido',
    
         feedbackIcons: {
    
             valid: 'fas fa-check-circle',
    
             invalid: 'fas fa-exclamation-circle',
    
             validating: 'fa fa-times-circle'
             
         },
    
            fields: {
    
                Array: {
    
                    validators: {
    
                        notEmpty: {
    
                            message: 'Debe ingresar un numero '
    
                        }, regexp: {
    
                            regexp: /^[0-9]+$/,
       
                            message: 'El campo solo debe contener números'
       
                        }
    
                    }
    
                }
            }
    
        });
