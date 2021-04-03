<div id="vcontent" class="container" style="margin-top: 50px">
    <div id="FACTURAS" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">FACTURAS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#FACTURAS').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>

        <?php // consumo de api banco de guatemala
            $url = "https://api.cambio.today/v1/full/USD/json?key=4578|*^SjWNhczF0TTb4hXqon_TUdzdUzriN8";
            $json = file_get_contents($url);
            $datos = json_decode($json, true);
            
            $conv = $datos["result"];
            $convDos = $conv["conversion"][52]["rate"];

            
            //var_dump($convDos);
            //aqui termina funcion
        ?> 


        <div class="card-body" style="text-align: center">
     
            <div class="row">


            <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoNit">No. de Nit</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoNit">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputNoFact">No. de Factura</label>
                    </div>
                    <input type="text" class="form-control" id="inputNoFact">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputFecha">Fecha</label>
                    </div>
                    <input type="date" class="form-control" id="inputFecha">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputDescripcion">Descripcion</label>
                    </div>
                    <input type="text" class="form-control" id="inputDescripcion">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputMonto">Monto $</label>
                    </div>
                    <input type="text" class="form-control" id="inputMonto">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputTipCambio">Tipo de Cambio</label>
                    </div>
                    <input type="text" class="form-control" value="<?php echo $convDos; ?>" id="inputTipCambio">
                </div>

                
                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputTotQuetzales">Total Quetzales</label>
                    </div>
                    <input type="text" class="form-control" id="inputTotQuetzales">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <button type="button" onclick="calcular()" class="btn btn-primary btn-sm"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                </div>


            </div>
                                
            <div class="modal-footer" style="text-align: right">
                <button class="btn btn-success btn-sm"  id="btnGuardarEntrada" onclick ="GuardarFactura()"> GUARDAR </button>
            </div>
        </div>
    </div>
</div>

<script src="./js/js_Factura.js" type="text/javascript" defer></script>
<script src="./js/calcular.js" type="text/javascript"></script>


