<?php
require_once 'conexion.php';
require_once '../lib/nusoap.php';

//funcion para insertar datos en la tabla tenis
function insertTenis($marca,$color,$numerotalla,$tipotenis,$modelo,$precio){
    try {
            $conexion= new Conexion(); 
            $consulta= $conexion->prepare("INSERT INTO tenis(marca,color,numerotalla,tipotenis,modelo,precio) 
                VALUES(:marca,:color,:numerotalla,:tipotenis,:modelo,:precio)");
                $consulta -> bindParam(":marca",$marca,PDO::PARAM_STR);
                $consulta -> bindParam(":color",$color,PDO::PARAM_STR);
                $consulta -> bindParam(":numerotalla",$numerotalla,PDO::PARAM_STR);
                $consulta -> bindParam(":tipotenis",$tipotenis,PDO::PARAM_STR);
                $consulta -> bindParam(":modelo",$modelo,PDO::PARAM_STR);
                $consulta -> bindParam(":precio",$precio,PDO::PARAM_STR);
                $consulta -> execute();
                $ultimoId=$conexion->lastInsertId();
                return join(",",array($ultimoId));

        } catch (Exception $e) {
            return join(",",array(false));
        }
}

function visualizarTenis(){
    try {
        $conexion= new Conexion();
        $consul1= $conexion->prepare("SELECT idtenis,marca,color,numerotalla,tipotenis,modelo,precio FROM tenis");
        $consul1->execute();
        while ($tabla = $consul1->fetch(PDO::FETCH_ASSOC)) {
            return $tabla;
        }
        
    } catch (Exception $e) {
        return join(",",array(false));
    }
}    

function modificarTenis($idtenis,$marca,$color,$numerotalla,$tipotenis,$modelo,$precio){
    try {
            $conexion= new Conexion();
            $consul2= $conexion->prepare("UPDATE tenis SET marca=:marca, color=:color, numerotalla=:numerotalla,
                                            tipotenis=:tipotenis,modelo=:modelo,precio=:precio WHERE idtenis=:idtenis");
            $consul2 -> bindParam(":marca",$marca,PDO::PARAM_STR);
            $consul2 -> bindParam(":color",$color,PDO::PARAM_STR);
            $consul2 -> bindParam(":numerotalla",$numerotalla,PDO::PARAM_STR);
            $consul2 -> bindParam(":tipotenis",$tipotenis,PDO::PARAM_STR);
            $consul2 -> bindParam(":modelo",$modelo,PDO::PARAM_STR);
            $consul2 -> bindParam(":precio",$precio,PDO::PARAM_STR); 
            $consul2 -> bindParam(":idtenis",$idtenis,PDO::PARAM_STR);
            $consul2 -> execute();
            $resultado = $consul2->rowCount();
            if($resultado > 0){
                return join(",",array(true));
            }
            else{
                return join(",",array(false));
            }
        
        } catch (Exception $e) {
            return join(",",array(false));
        }   
}
//funcion para eliminar un dato
function eliminarTenis($idtenis){
    try {
        $conexion= new Conexion();
        $consul3= $conexion->prepare("DELETE FROM tenis WHERE idtenis=?");
        $consul3 -> execute(array($idtenis));
        $resultadoeli= $consul3->rowCount();  
        if($resultadoeli > 0)
        {
            return join(",",array(true));
        }
        else{
            return join(",",array(false));
        }
    } catch (Exception $e) {
        return join(",",array(false));
    }
}

//aqui mandamos a llamar los metodos a insertar
$server = new nusoap_server();
$server -> configureWSDL("tenisservice","urn:tenisservice");
$server->register("insertTenis",
    array("marca"=>"xsd:string","color"=>"xsd:string","numerotalla"=>"xsd:string","tipotenis"=>"xsd:string","modelo"=>"xsd:string","precio"=>"xsd:string"),
    array("return"=>"xsd:string"),
    "urn:tenisservice",
    "urn:tenisservice#insertTenis",
    "rpc",
    "encodec",
    "Metodo que inserta Tenis");
//visualizar datos
$server->register("visualizarTenis",
    array(),
    array("return" => "xsd:string"),
    "urn:tenisservice",
    "urn:tenisservice#visualizarTenis",
    "rpc",
    "encodec",
    "Metodo para visualizar tenis");
//modificar datos
$server->register("modificarTenis",
    array("idtenis"=>"xsd:integer","marca"=>"xsd:string","color"=>"xsd:string","numerotalla"=>"xsd:string","tipotenis"=>"xsd:string","modelo"=>"xsd:string","precio"=>"xsd:string"),
    array("return"=>"xsd:string"),
    "urn:tenisservice",
    "urn:tenisservice#modificarTenis",
    "rpc",
    "encodec",
    "Metodo para modificar tenis");
//eliminar datos
$server->register("eliminarTenis",
    array("idtenis" => "xsd:integer"),
    array("return" => "xsd:string"),
    "urn:tenisservice",
    "urn:tenisservice#eliminarTenis",
    "rpc",
    "encodec",
    "Metodo para eliminar tenis");

$post = file_get_contents('php://input');
$server->service($post);


?>


