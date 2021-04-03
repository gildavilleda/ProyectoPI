<form id="Usuarios" class="container container-fluid" style="margin-top: 50px">
    <div id="InsumoEnt" class="card">
        <div class="modal-header text-center white-text green-grad">
            <h3 class="modal-title w-100 font-weight-bold">ADMINISTRAR USUARIOS</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                    onclick="$('#InsumoEnt').fadeOut();">
                <span aria-hidden="true" class="text-white">&times;</span>
            </button>
        </div>


        <div class="card-body">
            <div class="row">


                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="nombre_usuario">Usuario</label>
                    </div>
                    <input type="text" class="form-control" name="nombre_usuario">
                </div>

                <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="password">Contraseña</label>
                    </div>
                    <input type="password" class="form-control" name="password">
                </div>

               <div class="input-group input-group-sm mb-sm-3 col-sm-6">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="NumRol">Rol de Usuario</label>
                    </div>
                    <select name="NumRol" class="form-control">
                        <option value=""> SELECCIONE</option>
                        <option value="1">Administrador</option>
                        <option value="2">Digitador</option>
                        <option value="3">Proveedor</option>                    
                    </select>
                </div>


                    <!--   <div class="card-body">
                    <div class="row">
                </div>

                </div>

            </div>

            <div class="modal-footer">
                <button class="btn btn-success btn-sm"  id="btnGuardarRequi" onclick="añadirTabla()"> Agegar
                    <i class="fas fa-plus-circle"></i>
                </button>
            </div>

                     <table align="center" border="1" style="width:auto; height:20px;" class="table table-condensed table-bordered table-hover" bgcolor="#D3D3D3" id="tblFarmRequi">
                        <thead class="stylish-color-dark text-white">
                      <tr align="center" class="active">
                        <td width="380">Nombre Completo</td>
                        <td width="300">Usuario</td>
                        <td width="280">Rol</td>
                        <td width="280">Estado </td>
                        <td width="280">Acciones </td>
                      </tr>
                </thead>
                <tbody id="tbodyRequi">
                
                </tbody>
            </table>-->

           

            </div>
            <div class="modal-footer" style="text-align: right">
                <button class="btn btn-success btn-sm"  > GUARDAR </button>
            </div>
        </div>
    </div>
        </div>
    </div>
</form>


<script src="./js/js_usuarios.js" type="text/javascript" defer></script>
