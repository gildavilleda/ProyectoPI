<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="shortcut icon" href="favicon.ico"/>
<title>Soluciones Contables</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" defer></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" defer></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" defer></script>


<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" defer></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js" defer></script>





<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

<!-- Material Design Bootstrap -->
<link href="./css/mdb.min.css" rel="stylesheet">

<!-- Date Range Picker-->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js" defer></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"
        defer></script>

<!-- Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js" defer></script>

<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons">

<!-- Context menu -->
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"
        defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js" defer></script>

<!--     Css     -->
<link rel="stylesheet" href="./css/index.css" type="text/css" media="all">
<link rel="stylesheet" href="./css/Style.css" type="text/css" media="all">

<!-- Toast -->
<link rel="stylesheet" href="./css/toast.min.css ">
<script src="./js/toast.min.js" type="text/javascript" defer></script>


<style>
    body {
        font-family: "Roboto", "Helvetica", "Arial", "Sans-serif";
    }
</style>
</head>

<body>

<!--menu-->

<nav class="navbar navbar-expand-lg navbar-dark rgba-black-light">
    <a class="navbar-brand" href="index.php" style="font-family: 'Helvetica'; font-weight: bold; color: white; font-size: 22px"><img src="./img/factura.jpg" style="margin-right: 10px" alt="factura.jpg">Soluciones Contables</a>
    <button class="navbar-toggler form-inline" type="button" data-toggle="collapse" data-target="navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 55px">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-boxes"></i>
                        Opciones
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'PIProveedores')">Agregar Proveedor</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'PIAgFActura')">Agregar Factura</a>
                       <!-- <a class="dropdown-item" onclick="fnOpenForm(event, 'PIMontRetencion')">Consulta Retencion</a>-->
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'PIAdminUsuarios')">Agregar Usuario</a>
                        
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-pills"></i>
                        Reportes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'PIProveedoreswv')">Proveedores</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'PIBitacorawv')">Bitacora</a>
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'TotalRetencion')">Total Retencion</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cogs"></i>
                        Utilitarios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" onclick="fnOpenForm(event, 'UtlFrmCerrar')">Cerrar sesión</a>
                </li>
            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-success my-2 my-sm-0" type="button" data-toggle="modal" data-target="#modalInsumo">Buscar</button>
            </form>-->
        </div>
</nav>

<div id="content">
</div>



<!--Modal-->


<script src="./js/js_menu.js" type="text/javascript"></script>
</body>

</html>