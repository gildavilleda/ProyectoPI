$('#tbBitacoraMostrar').DataTable( {


    "oSearch": {"bSmart": false,
        "bRegex": true,
        "sSearch": ""  },//busca un dato exacto
    dom: 'Blfrtip',
    buttons: [
        'print', 'pdf'
    ],
    "ajax": "./api/v1/PIWvBitacora.php",
    "columns": [

        { "data": "nombre" },
        { "data": "fecha_hora" },
        { "data": "operacion" },
        { "data": "tabla" },
        { "data": "NombreRol" }
       // { "data": "trama" }
        

     
    
    ]
    
} );