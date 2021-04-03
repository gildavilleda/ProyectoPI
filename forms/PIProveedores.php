<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="proveedores" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">PROVEEDORES</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#PIProveedores').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <div class="card-body" style="text-align: center">
     
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNit">No. de Nit</label>
                    </div>
                    <input type="text" class="form-control" id="inputNit">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNomProvEmp">Nombre Proveedor/Empresa</label>
                    </div>
                    <input type="text" class="form-control" id="inputNomProvEmp">
                </div>
         

                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputRegimen">Regimen</label>
                    </div>
                    <input type="text" class="form-control" id="inputRegimen">
                </div>


            </div>
        
            </div>
            <div class="modal-footer" style="text-align: right">
                <button class="btn btn-success btn-sm"  id="btnGuardarEntrada" onclick ="GuardarProv()"> GUARDAR </button>
            </div>
        </div>
    </div>
</div>

<script src="./js/js_Proveedor.js" type="text/javascript" defer></script>
