<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="consulta" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">CONSULTA RETENCION</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#consulta').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body" style="text-align: center">
     
            <div class="row">
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoFact">No. de Factura</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoFact">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoNit">No. de Nit</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoNit">
                </div>
           

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecha">Fecha</label>
                    </div>
                    <input type="text" class="form-control" id="inputFecha">
                </div>

                </div>

                <div class="modal-footer">
                <button class="btn btn-success btn-sm"  id="btnGuardarRequi" onclick="añadirTabla()"> Mostar Monto
                    <i class="fas fa-plus-circle"></i>
                </button>
                </div>
                
                <div class="input-group input-group-sm mb-sm-3 col-sm-12">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMotRetencion">Monto Retencion</label>
                    </div>
                    <input type="text" class="form-control" id="inputMotRetencion">
                </div>                   
            
        </div>
    </div>
</div>
