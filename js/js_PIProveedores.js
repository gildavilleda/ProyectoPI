$('#tbProveedoresMostrar').DataTable( {


        "oSearch": {"bSmart": false,
            "bRegex": true,
            "sSearch": ""  },//busca un dato exacto
        dom: 'Blfrtip',
        buttons: [
           'excel', 'pdf', 'print'
        ],
        "ajax": "./api/v1/PIWvProveedores.php",
        "columns": [

            { "data": "fecha" },
            { "data": "numero_factura" },
            { "data": "nombre" },
            { "data": "nit_proveedor" },
            { "data": "monto" },
            { "data": "totalquetzales" },
            { "data": "regimen" },
            { "data": "cl_iva" },
            { "data": "cl_isr" },
            { "data": "cl_tretencion" }
           
        ]
        
    } );