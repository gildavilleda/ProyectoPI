<?php


function tipoCambioDia(){
    require_once "lib/nusoap.php";
    $url = 'http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL';
    
    $cliente = new soapclient($url, true);
    
    $error = $cliente->getError();
    if ($error)
    {
        die('<p><stong>ERROR:</strong><br /> '.$error.'</p>');
    }
    
    $result = $cliente->call('TipoCambioDiaString');
    
    
    $cadena_equipo = implode("", $result);
    
    //print_r($cadena_equipo);
    $rest = substr($cadena_equipo, 135, -10);
    
    
   die('<p><stong></strong><br /> '.$rest.'</p>');
   //print_r ($result);

}
echo tipoCambioDia();

///implode https://www.anerbarrena.com/php-implode-4685/


?> 





