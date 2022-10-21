<?php 
$contrasena = "4VPFRk6Ejc";
$usuario = "sql10528134";
$nombre_bd = "sql10528134";

try {
	$conexion = new PDO (
		'mysql:host=sql10.freemysqlhosting.net;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>