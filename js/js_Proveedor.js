function swichSuccessWarning(codstate) {
    /*
    Esta Funcion se utiliza para indicarle al Toast
    que Tipo de Alerta debe mostrar, si Satisfactorio o error
     */
    if (codstate === '0' || codstate === 0) {
        return 'error'
    } else {
        return 'success'
    }


}
$(document).ready(function () {
    var f = new Date();
    let fecha = (f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
    $('#inputFecha').val(fecha);

});

/*Funcion para guardar proveedor*/
function GuardarProv() {
    let inputNit = $('#inputNit').val();
    let inputNomProvEmp = $('#inputNomProvEmp').val();
    let inputRegimen = $('#inputRegimen').val();
 
    let datos = {
        nit: inputNit,
        nombre: inputNomProvEmp,
        regimen: inputRegimen
    };

    console.log(datos);
    $.ajax({
        url: './api/v1/PICore.php',
        type: 'POST',
        data: datos,
        success: function (response) {
            $.toast({
                title: 'Informativo',
                subtitle: '1 segundo',
                content: response.state.strstate,
                type: swichSuccessWarning(response.state.codstate),
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarEntrada").text('GUARDAR').attr('disabled', false);
        },
        error: function (request, status, error) {
            console.log(request);
            $.toast({
                title: 'Ups!',
                subtitle: '1 segundo',
                content: ' ' + request.responseText,
                type: 'error',
                pause_on_hover: true,
                delay: 5000
            });
            $("#btnGuardarEntrada").text('GUARDAR').attr('disabled', false);
          
        }
    });
}


$('#inputNit').val(' ');
$('#inputNomProvEmp').val(' ');
$('#inputRegimen').val('');




