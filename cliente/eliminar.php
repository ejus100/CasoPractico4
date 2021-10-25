<?php
	  $idtenis=$_POST['idtenis'];



    include('../lib/nusoap.php');
    
	$client=new nusoap_client("http://localhost/caso/servidor/tenisservice.php?wsdl");
    
	$err = $client->getError();
	if ($err) {	echo 'Error en Constructor' . $err ; } 
    //se pasa los parámentros
  
	$resultado = $client->call('eliminarTenis', array('idtenis'=>$idtenis));
	
	if ($client->fault) {
	echo 'Fallo';
	print_r($result);
} else {	
	$err = $client->getError();
	if ($err) {		
		echo 'Error' . $err ;
	} 
	else {		
		header('location:http://localhost/caso/cliente/Index.php');
	}
}
 ?>