<?php
date_default_timezone_set('America/Mexico_City');

$conexion = mysqli_connect("sql10.freemysqlhosting.net", "sql10528134", "4VPFRk6Ejc");

if (mysqli_connect_errno()) {
	printf("Falló la conexión: %s\n", mysqli_connect_error());
	exit();
}

mysqli_set_charset($conexion, 'utf8');