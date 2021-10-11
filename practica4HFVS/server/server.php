<?php
require_once "lib/nusoap.php";
function getDeporte($datos){
    if($datos == "Deportes"){
        return join(",",array(
            "Futbol",
            "Basquetbol",
            "Voleybol",
            "baseball"
        ));
    }
    else {
        return "No hay deportes";
    }
}
$server = new soap_server();
$server->register("getDeporte");
if( !lisset ( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>
