function fnOpenForm(evt, formname) {
    var Count = 0;
    $("#content").hide();
    console.log(formname);

    var permisos = $.getJSON("./api/v1/Permisos.php?NomPermiso=" + formname, function (data) {
        Count = data.data.length;

    });

    console.log(Count);

    $.when(permisos).done(function () {
        $("#content").empty();
        if (Count > 0) {
            $("#content").load('./forms/' + formname + '.php');
        } else {
            $("#content").load('./forms/CitFrmDenegado.php');
        }
        $("#content").show();
    }).fail(function () {
        if (permisos.status === 403) {
            location.reload();
        }
    });
}



function myDropFunc(elemento) {
    var x = document.getElementById(elemento);

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-indigo";

    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className =
            x.previousElementSibling.className.replace(" w3-indigo", "");
    }
}

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').focus()
})

