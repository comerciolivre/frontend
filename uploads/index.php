<?php 
session_start();
if(!empty($_SESSION['usuarioNome'])){
	include_once("../../404.php");
}else{
	$_SESSION['msg'] = "Área restrita";
	header("Location: ../../404.php");	
}

?>