<?php
/**
 * Created by PhpStorm.
 * User: Magui C
 * Date: 10/12/2018
 * Time: 12:46 PM
 */
$host="ec2-54-235-156-60.compute-1.amazonaws.com";
$username="qydnvozpsikxjm";
$password="ece09a6ba506560e056b957e520d876725cd2d11b29f23e52f01f5138db8ab77";
$database="dcguupq4e9ar8p";



// Conexión a la base de datos
$connection=pg_connect("host=$host port=5432 password=$password user=$username dbname=$database");
$query ="INSERT INTO paciente(nombre, edad,telefono,razon,email,departamento,fecha,doctor) 
    VALUES ('$info_dep', '$info_doc','$nom','$correo','$fecha' , '$razon' ,'$cel' )";

$result=pg_insert($connection, $query, $_POST );
if (!$result) {
$error.="pg_last_error($connection)<li>";
}

echo $info_dep;
echo $info_doc;
echo $nom;
echo $correo
echo $fecha
echo $razon
echo $cel



?>


<html>
<head>
<title>insertar registros</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
</body>
</html>
