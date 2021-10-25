<?php
        $idtenis=$_POST['idtenis'];
	    $marca=$_POST['marca'];
        $color=$_POST['color'];
        $numerotalla=$_POST['numerotalla'];
        $tipotenis=$_POST['tipotenis'];
        $modelo=$_POST['modelo'];
        $precio=$_POST['precio'];
	
    include('../lib/nusoap.php');   
	$client=new nusoap_client("http://localhost/caso/servidor/tenisservice.php?wsdl");
    
	$err = $client->getError();
	if ($err) {	echo 'Error en Constructor' . $err ; } 
   
    $param=array('idtenis'=>$idtenis,'marca'=>$marca, 'color' => $color, 'numerotalla' => $numerotalla, 'tipotenis' => $tipotenis, 'modelo' => $modelo, 'precio' => $precio); 
	$resultado = $client->call('modificarTenis',$param);
	
	if ($client->fault) {
	echo 'Fallo';
	print_r($result);
	}
	else {	
	$err = $client->getError();
	if ($err) {		
		echo 'Error' . $err ;
	} 
	else {		
		header('location:http://localhost/caso/cliente/Index.php');
	}
}
 ?>