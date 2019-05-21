<?php
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}


	include "conexion.php";
	//$encriptado=$_POST['password'];
	$sql = "insert into form200(
		idusu,
		requiriente,
		emprersa,
		area,
		proveedor,
		cheque,
		proforma,
		condicion,
		fecha,
		proyecto,
		observacion,
		elaborado,
		sw
		) values (".$_SESSION["user_id"].",
			\"$_POST[requiriente]\",
			\"$_POST[empresa]\",
			\"$_POST[area]\",
			\"$_POST[proveedor]\",
			\"$_POST[cheque]\",
			\"$_POST[proforma]\",
			\"$_POST[condicion]\",
			\"$_POST[fecha]\",
			\"$_POST[proyecto]\",
			\"$_POST[observacion]\",
			\"$_POST[requiriente]\",
			0
			)";

	$query = $con->query($sql);	
	$row= (($con->query("SELECT idform FROM form200 ORDER by idform DESC LIMIT 1"))->fetch_object())->idform;

$sql = "insert into requerimiento(
		idform,
		codigo,
		grupo,
		descripcion,
		destino,
		control,
		cantidad,
		unidad,
		moneda,
		precio,
		total,
		sw
		) values (
			".$row.",
			\"$_POST[codigo1]\",
			\"$_POST[grupo1]\",
			\"$_POST[descripcion1]\",
			\"$_POST[destino1]\",
			\"$_POST[control1]\",
			\"$_POST[cantidad1]\",
			\"$_POST[medida1]\",
			\"$_POST[moneda1]\",
			\"$_POST[precio1]\",
			\"$_POST[total1]\",
			0
			)";
	$query = $con->query($sql);
if(!($_POST['codigo2']=='' and $_POST['grupo2']=='' and $_POST['descripcion2']=='' and $_POST['destino2']=='' and $_POST['control2']=='' and $_POST['cantidad2']=='' and $_POST['medida2']=='' and $_POST['moneda2']=='' and $_POST['precio2']=='' and $_POST['total2']=='')){

	$sql = "insert into requerimiento(
		idform,
		codigo,
		grupo,
		descripcion,
		destino,
		control,
		cantidad,
		unidad,
		moneda,
		precio,
		total,
		sw
		) values (
			".$row.",
			\"$_POST[codigo2]\",
			\"$_POST[grupo2]\",
			\"$_POST[descripcion2]\",
			\"$_POST[destino2]\",
			\"$_POST[control2]\",
			\"$_POST[cantidad2]\",
			\"$_POST[medida2]\",
			\"$_POST[moneda2]\",
			\"$_POST[precio2]\",
			\"$_POST[total2]\",
			0
			)";
	$query = $con->query($sql);



if(!($_POST['codigo3']=='' and $_POST['grupo3']=='' and $_POST['descripcion3']=='' and $_POST['destino3']=='' and $_POST['control3']=='' and $_POST['cantidad3']=='' and $_POST['medida3']=='' and $_POST['moneda3']=='' and $_POST['precio3']=='' and $_POST['total3']=='')){

$sql = "insert into requerimiento(
		idform,
		codigo,
		grupo,
		descripcion,
		destino,
		control,
		cantidad,
		unidad,
		moneda,
		precio,
		total,
		sw
		) values (
			".$row.",
			\"$_POST[codigo3]\",
			\"$_POST[grupo3]\",
			\"$_POST[descripcion3]\",
			\"$_POST[destino3]\",
			\"$_POST[control3]\",
			\"$_POST[cantidad3]\",
			\"$_POST[medida3]\",
			\"$_POST[moneda3]\",
			\"$_POST[precio3]\",
			\"$_POST[total3]\",
			0
			)";
	$query = $con->query($sql);
print 'tercera no esta vacia';


if(!($_POST['codigo4']=='' and $_POST['grupo4']=='' and $_POST['descripcion4']=='' and $_POST['destino4']=='' and $_POST['control4']=='' and $_POST['cantidad4']=='' and $_POST['medida4']=='' and $_POST['moneda4']=='' and $_POST['precio4']=='' and $_POST['total4']==''))
$sql = "insert into requerimiento(
		idform,
		codigo,
		grupo,
		descripcion,
		destino,
		control,
		cantidad,
		unidad,
		moneda,
		precio,
		total,
		sw
		) values (
			".$row.",
			\"$_POST[codigo4]\",
			\"$_POST[grupo4]\",
			\"$_POST[descripcion4]\",
			\"$_POST[destino4]\",
			\"$_POST[control4]\",
			\"$_POST[cantidad4]\",
			\"$_POST[medida4]\",
			\"$_POST[moneda4]\",
			\"$_POST[precio4]\",
			\"$_POST[total4]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';

}}

?>
<a href="../html2pdf/examples/exemple02.php?id=<?php echo $row; ?>">
	descargar pdf
</a>