<DOCTYPE! html>
<html>
	<head>
    <title>
      Wendy Homecenter
    </title>
	</head>
	<body bgcolor=#ffffff
    background="https://fondosmil.com/fondo/9928.jpg">
	</body>
</html>
<!DOCTYPE html>

<center>
    <div id= "header" class="section">
    <img alt="" class= "img-circle" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Homecenter_Sodimac.png"
    </center>

<!DOCTYPE HTML>  
<html>
<head>
<a 
<img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Logo_Homecenter_Sodimac.png">
    </a>
<style>
.error {color: #C7142F;}
</style>
</head>
<body>  
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de compra</title>
</head>

<!--se alinea el cuerpo del formulario-->
<body>
<div align='center'>
    <!--se agraga un formulario con sus variables-->
<h1 aling="center" >FORMULARIO DE COTIZACIÓN</h1>
  <form action = "mate.php" method= "POST">
      <fieldset>
          <label for = "art1">Precio articulo 1 </label>
          <input type ="Text" placeholder= "Escribe aquí el precio"name= "art1" id = "art1">
          <br> <br>
          <label for = "art2">Precio articulo 2</label>
          <input type ="Text" placeholder= "Escribe aquí el precio"name = "art2"id = "art2">
          <br> <br>

          <label for = "art3">Precio articulo 3 </label>
          <input type ="Text" placeholder= "Escribe aquí el precio" name= "art3" id = art3">
          <br> <br>

          <label for = "desc">% Descuento </label>
          <input type ="desc" placeholder= "%" name ="desc" id = "desc">
          <br> <br>

          <input type="submit" value="Enviar" name = "enviar" id = "enviar">

          <?php

//condiciones resultados 

 if(isset($_POST["enviar"])){ 
 $art1 = $_POST["art1"]; 
 $art2 = $_POST["art2"]; 
 $art3 = $_POST["art3"]; 
 $desc = $_POST["desc"]; 
 $total= $art1 + $art2 + $art3;
  $descuento =($desc/100)*$total;
  $totalf = $total - $descuento;

  //condicionales
  if ($art1 > $art2):
    echo $art1." es mayor que ".$art2;
elseif ($art1 == $art2): 
    echo $art1." es menor que ".$art2;
elseif ($art1 == $art2):
    echo $art1." ".$art2;
endif;

 

  //se imprimen los resultados 
 echo "<h2>Totales...</h2><br>"; 
 echo "TOTAL SIN DESCUENTO: ". $total ."<br>"; 
 echo "DESCUENTO: ".$descuento."<br>"; 
 echo "TOTAL FINAL: " .$totalf."<br>";
   }