<?php
$link = mysql_conenect("http://localhost/phpmyadmin/","root","") or die("<h2>no se encuentra el servidor</h2>");
$db = mysql_select_db("formulario",$link) or die ("<h2>error de conexiion</h2>");

$clave1  = $_post['clave'];
$nombre1 = $_post['nombre'];
$serie1 = $_POST['serie'];
$productor1 = $_post['productor'];
$identificador1 = $_post['identificador'];
$all = $_POST['al'];
$paquete = $_post['paquetes'];
$nosiniga = $_post['No.siniga'];
$arete1 = $_post['arete'];
$raza1 = $_post['raza'];
$cruza1 = $_post['cruza'];
$empadre1 = $_post['empadre'];
$padre1 = $_post['padre'];
$madre1 = $_post['madre'];
$dia1 = $_post['dia'];
$mes1 = $_post['mes'];
$año1 = $_post['año'];
$macho1 = $_post['macho'];
$hembra1 = $_post['hembra'];

$req = (strlen($clave1)*strlen($nombre1)*strlen($serie1)*strlen($productor1)*strlen($identificador1)*strlen($all!)*strlen($paquete)*strlen($nosiniga)
*strlen($arete1)*strlen($raza1)*strlen($cruza1)*strlen($empadre1)*strlen($padre1)*strlen($madre1)*strlen($dia1)*strlen($mes1)*strlen($año1)*strlen($macho1)*strlen($hembra1)) or die ("no se han llenado todos los campos");

mysql_query("INSERTAR INTO datos VALUES ('','$clave1','$nombre1','$serie1','$productor1','$identificador1','$all','$paquete','$nosiniga','$arete1','$raza1','$cruza1','$empadre1','$padre1','$madre1','$dia1','$mes1'
,'$año1','$macho1','$hembra1')",$link) or die ("<h2>Error Guardando los datos</h2>");
echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'
 ?>
