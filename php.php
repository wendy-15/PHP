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
    <?php

    //se declaran las variables y id de cada valor

$NOMBRES = $_POST['nombre'];
$APELLIDOS = $_POST['apellido'];
$REFPRODUCTO = $_POST['ref'];
$COMENTARIO = $_POST['coment'];
$CORREO = $_POST['email'];
$CONTACTO = $_POST['cont'];
$DIRECCION = $_POST['direc'];
$FECHA = $_POST['fecha'];

$NOMBRESErr = $_POST['nombre'];
$APELLIDOSErr = $_POST['apellido'];

/*
se establecen los resultados
*/

echo "<h1>RESULTADOS DEL FORMULARIO</h1>";
echo "LOS NOMBRES DEL CLIENTE SON: " . $NOMBRES . "<br/>";
echo "LOS APELLIDOS DEL CLIENTE SON: " . $APELLIDOS . "<br/>";
echo "LA REFERENCIA DEL PRODUCTO ES: " . $REFPRODUCTO . "<br/>";
echo "EL COMENTARIO ES: " . $COMENTARIO . "<br/>";
echo "EL CORREO DEL CLIENTE ES: " . $CORREO . "<br/>";
echo "EL CONTACTO DEL CLIENTE ES: " . $CONTACTO. "<br/>";
echo "LA DIRECCION DEL CLIENTE ES: " . $DIRECCION . "<br/>";
echo "LA FECHA DE VENTA ES: " . $FECHA . "<br/>";

//Las siguientes son variables obligatorias completas

$NOMBRES = $APELLIDOS = $REFPRODUCTO = $COMENTARIO = $CORREO = $CONTACTO = $FECHA ="";


// definir variables y establecer condicionales

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['nombre'])) {
        $NOMBRESErr = "El nombre es requerido";

    } else {
        $NOMBRES = test_input($_POST['nombre']);
    }

    if (empty($_POST['apellido'])) {
        $APELLIDOSErr = "El apellido es requerido";
    } else {
        $APELLIDOS = test_input($_POST['apellido']);
    }
    

    if (empty($_POST['FECHA'])) {
        $fechaErr = "LA FECHA ES REQUERIDA";
    } else {
        $fecha = test_input($_POST['FECHA']);
    }
}

function test_input ($data) {
    $data = trim($data); 
    //devuelve el valor ingresado
    return $data; 
}

?>