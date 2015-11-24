<?php
header('Content-Type: text/javascript; charset=UTF-8'); 
$resultados = array();

//$conexion = mysqli_connect("localhost", "root", "", "tpfinal");
//Conector Online
$conexion = mysqli_connect("localhost", "organize_flor", "dominiogratis2015", "organize_organizeme");

mysqli_query($conexion, "SET NAMES 'UTF8'");
