<?php
require_once "lib/nusoap.php";
$cliente = new nusoap_client("http://localhost/practica4HFVS/server/server.php");
$error = $cliente->getError();
if($error){
    echo "<h2>Constructor error</h2><pre>".$error."</pre";
}
$result = $cliente->call("getDeporte",array("datos"=>"Deportes"));
if($cliente->fault){
    echo"<h2>Fault</h2><pre>";
    print_r($result);
    echo"</pre>";
}
else{
    $error=$cliente->getError();
    if($error){
        echo "<h2>Error</h2><pre>".$error."</pre>"}
    else{
        echo "<h2>Deportes</h2><pre>";
        echo $result;
        echo "</pre>";
    }
}
?>