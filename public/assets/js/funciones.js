var Biblioteca = function() {
    return {
        validacionGeneral: function (id, reglas, mensajes){
            const formulario = $('#' + id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span', //default input error message container
                errorClass: 'help-block help-block-error', //default input error message class
                focusInvalid: false, // do not focus the last invalid input
                ignore: "", //validate all fiels including form hidden input
                highlight: function (element, errorClass, validClass){
                    $(element).closest('.form-group').addClass('has-error'); //Set error Class to the control Group
                },
                unhighlight: function (element) { 
                    $(element).closest('.form-group').removeClass('has-error'); //Revert changes by highlight
                },
                success: function (label) { 
                    label.closest('.form-group').removeClass('has-error'); //Set Success class to the control Group
                },
                errorPlacement: function (error, element){
                    if ($(element).is('select') && element.hasClass('bs-select')){ //Para los Select de Boostrap 3
                        error.insertAfter(element);
                    } else if ($(element).is('select') && element.hasClass('select2-hidden-accessible')){
                        element.next().after(error);
                    } else if ($(element).attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    } else {
                        error.insertAfter(element); //default placement for everything else
                    }
                },
                invalidHandler: function (event, validator){ //Display error alert on form submint

                },
                submitHandler: function (form) {
                    return true;
                }

            });
        },
    }
}();