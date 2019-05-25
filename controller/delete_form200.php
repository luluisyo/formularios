<?php 
	session_start();
	  if ($_SESSION['user_id']==null) {
	    print "<script>alert(\"No puede realizar estas acciones.\");window.location='../views/view_user.php';</script>";
	    exit;
	  }
	  if(!($_SESSION["tipo"]=='m')){
    print "<script>window.location='./view_form200usu.php';</script>";
}
	$tabla="proveedor";
	extract($_GET);
	include "conexion.php";
	
	$sql2= "DELETE FROM requerimiento WHERE idreq=$id";
	$query2 = $con->query($sql2);
	mysqli_close($con);

	if($query2!=null){
			print "<script>alert(\"Requerimiento eliminado exitosamente\");window.location='../views/view_form200.php';</script>";
	}
	else{
			print "<script>alert(\"Error interno del sistema, consulte con el administrador\");window.location='../views/view_form200.php';</script>";
	}
?>