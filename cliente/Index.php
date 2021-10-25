<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TENIS</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body background="../img/real.jpg" style="background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <br></br>
    <br></br>
  <!-- INGRESAR DATOS-->
<div class="container">  
  <form id="contact" action="insertar.php" method="post">
    
    <h3 style="color:#FFFFFF"><font face="Comic Sans MS,arial,verdana">Ingresar Datos de Tenis</font></h3>
            
      <input name="marca" type="text" placeholder="Marca">
      <input name="color" type="text" placeholder="Color">
      <input name="numerotalla" type="text" placeholder="Número de talla">
      <input name="tipotenis" type="text" placeholder="Tipo de tenis">
      <input name="modelo" type="text" placeholder="Modelo">
      <input name="precio" type="text" placeholder="Precio"><br></br>
      <button name="submit" type="submit" style="background-color:#F4D03F" onclick="hizoClick()">Guardar</button>
          <script>
          function hizoClick() {
            alert("Datos guardados satisfactoriamente");
          }
          </script>
          
    
    
    
  </form>
</div>

<!--MODIFICAR DATOS-->
<div class="container">  
  <form id="contact" action="modificar.php" method="post">
   
  <h3 style="color:#FFFFFF"><font face="Comic Sans MS,arial,verdana">Modificar Datos de Tenis</font></h3>
    
      <input name="idtenis" type="text" placeholder="Id tenis" >
      <input name="marca" type="text" placeholder="Marca">
      <input name="color" type="text" placeholder="Color">
      <input name="numerotalla" type="text" placeholder="Número de talla">
      <input name="tipotenis" type="text" placeholder="Tipo de tenis">
      <input name="modelo" type="text" placeholder="Modelo">
      <input name="precio" type="text" placeholder="Precio"><br></br>
      <button name="submit" type="submit" style="background-color:#F4D03F" onclick="hizoClick2()">Guardar</button>
          <script>
          function hizoClick2() {
            alert("Datos modificados correctamente");
          }
          </script>
    
  </form>
</div>
</br>

<!--ELIMINAR DATOS-->
<div class="container">  
  <form id="contact" action="eliminar.php" method="post">
    
  <h3 style="color:#FFFFFF"><font face="Comic Sans MS,arial,verdana">Eliminar Tenis</font></h3>
    
      <input name="idtenis" type="text" placeholder="Id tenis" ><br></br>
      <button name="submit" type="submit" style="background-color:#F4D03F" onclick="hizoClick3()">Eliminar</button>
          <script>
          function hizoClick3() {
            alert("Datos Eliminado correctamente");
          }
          </script>
    
    
  </form>
</div>
  
</body>
</html>