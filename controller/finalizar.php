<?php
session_start();
require("./conexion.php");
$query2=mysqli_query($con,("UPDATE requerimiento set sw=1 where idreq=".$_GET['id']));
$query2=mysqli_query($con,("insert into aprobacion (idreq,fecha, respondable) value(".$_GET['id'].",'".date("Y-m-d")."','".$_SESSION["nombre"]." ".$_SESSION["apellido"]."');"));

	if($query2!=null){
			print "<script>alert(\"Requerimiento actualizado exitosamente\");window.location='../views/view_form200.php';</script>";
	}
	else{
			print "<script>alert(\"Error interno del sistema, consulte con el administrador\");window.location='../views/view_form200.php';</script>";
	}



?>   