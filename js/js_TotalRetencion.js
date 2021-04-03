$('#tbTotalRetencionMostrar').DataTable( {


    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
    ],
    "ajax": "./api/v1/PIvwTotRetencion.php",
    "columns": [

        { "data": "nit_proveedor" },
        { "data": "numero_factura" },
        { "data": "cl_tretencion" }
       
    ]
    
} );