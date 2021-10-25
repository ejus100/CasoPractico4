<?php
	
    $marca=$_POST['marca'];
    $color=$_POST['color'];
    $numerotalla=$_POST['numerotalla'];
    $tipotenis=$_POST['tipotenis'];
    $modelo=$_POST['modelo'];
    $precio=$_POST['precio'];

include('../lib/nusoap.php');
//aqui ponemos el url de nuestro service wsdl
$client=new nusoap_client("http://localhost/caso/servidor/tenisservice.php?wsdl");

$err = $client->getError();
if ($err) {	echo 'Error en Constructor' . $err ; } 
//se pasa los parámetros del método insertar

$resultado = $client->call('insertTenis', [$marca,$color,$numerotalla,$tipotenis,$modelo,$precio]);
 
if ($client->fault) {
echo 'Fallo';
print_r($result);
} else 
{	
    $err = $client->getError();
    if ($err) {		
        echo 'Error' . $err ;
    } else {	 
        header('location:http://localhost/caso/cliente/Index.php');
    }
}
?>