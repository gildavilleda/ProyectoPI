

<div id="PIProveedores" class="card" style="margin-top: 50px">
    <div class="modal-header text-center text-white green-grad">
        <h3 class="modal-title w-100 font-weight-bold">Proveedores</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                onclick="$('#proveedores').fadeOut();"
        <span aria-hidden="true" class="text-white">&times;</span>
        
    </div>
    <!--<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar" aria-label="Buscar" id="buscarcodigoInsumo">
        <button class="btn btn-success my-2 my-sm-0" type="button" onclick="controlInventario();">Buscar prueba</button>
    </form>-->

<div class="row">
        <div class="col-sm-12">
            <table id="tbProveedoresMostrar" class="table table-sm table-hover w3-border" width="99%">
                <thead class="primary-color text-white">
        <tr>
                    <th class="">Fecha</th>
                    <th class="">Numero de Factura</th>
                    <th class="">Nombre</th>
                    <th class="">Nit del Proveedor</th>
                    <th class="">Monto</th>
                    <th class="">Cantidad Quetzales</th>
                    <th class="">Regimen</th>
                    <th class="">IVA</th>
                    <th class="">ISR</th>
                    <th class="">Retencion</th>
                  
                </tr>
                </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>
<script src="./js/js_PIProveedores.js"></script>