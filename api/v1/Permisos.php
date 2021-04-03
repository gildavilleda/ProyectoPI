<?php

require_once '../../functions/Database.php';
require_once '../../functions/JsonObject.php';
require_once '../../functions/WhereDinamic.php';
session_start();

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header("Content-Type: application/json; charset=UTF-8");

$ObjectJson = new JsonObject();


if (!isset($_SESSION['dbUser'])) {
    echo $ObjectJson->Json('0', 'Usuario no autenticado', null);
    http_response_code(403);
    exit(0);
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
//Procedimiento para agregar o modificar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC sp_AgoModfPermisos ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'NumPermiso'});
            $stmt->bindParam(2, $_REQUEST{'NomPermiso'});


            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, "" . $p->getMessage(), null);
        }

        break;
    case 'DELETE':
//Procedimiento para Eliminar
        try {
            $Db = new Database();
            if (!$Db->Connect($_SESSION{'dbUser'}, $_SESSION['dbPass'])) {
                echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
                exit(0);
            }

            $stmt = $Db->Sentencia("EXEC sp_AgoModfPermisos ?, ?, ?, ?, ?");

            $stmt->bindParam(1, $_REQUEST{'NumPermiso'});
            $stmt->bindParam(2, $_REQUEST{'NomPermiso'});
            $stmt->bindParam(3, $_REQUEST{'Descripcion'});
            $stmt->execute();
            $data = $stmt->fetchAll();
            $data = $data[0];
            echo $ObjectJson->Json($data['codeMensaje'], $data['strMensaje'], null);
            $stmt->closeCursor();
        } catch (PDOException $p) {
            echo $ObjectJson->Json(0, " " . $p->getMessage(), null);
        }
        break;

    case 'GET':
//Procedimiento para Mostrar
        $Db = new Database();
        $Wh = new WhereDinamic();

        if (!$Db->Connect($_SESSION['dbUser'], $_SESSION['dbPass'])) {
            echo $ObjectJson->Json(0, 'Fallo de Conexion en la Base de Datos');
            exit(0);
        }
        if (isset($_REQUEST['NomPermiso']))
            $Wh->addAtributos('NomPermiso', ' = ', $_REQUEST['NomPermiso']);

        $data = $Db->GetData("SELECT * FROM seguridad.vw_permisosUsuario " . $Wh->strWhere(), $_SESSION['dbUser'], $_SESSION['dbPass']);
        echo $ObjectJson->Json('1', 'Ejecucion de Consulta', $data);
        break;

    default:
        echo $ObjectJson->Json('0', 'Request no definido', null);
        break;

}