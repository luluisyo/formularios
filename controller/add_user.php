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


if(!($_POST['codigo5']=='' and $_POST['grupo5']=='' and $_POST['descripcion5']=='' and $_POST['destino5']=='' and $_POST['control5']=='' and $_POST['cantidad5']=='' and $_POST['medida5']=='' and $_POST['moneda5']=='' and $_POST['precio5']=='' and $_POST['total5']==''))
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
			\"$_POST[codigo5]\",
			\"$_POST[grupo5]\",
			\"$_POST[descripcion5]\",
			\"$_POST[destino5]\",
			\"$_POST[control5]\",
			\"$_POST[cantidad5]\",
			\"$_POST[medida5]\",
			\"$_POST[moneda5]\",
			\"$_POST[precio5]\",
			\"$_POST[total5]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';

if(!($_POST['codigo6']=='' and $_POST['grupo6']=='' and $_POST['descripcion6']=='' and $_POST['destino6']=='' and $_POST['control6']=='' and $_POST['cantidad6']=='' and $_POST['medida6']=='' and $_POST['moneda6']=='' and $_POST['precio6']=='' and $_POST['total6']==''))
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
			\"$_POST[codigo6]\",
			\"$_POST[grupo6]\",
			\"$_POST[descripcion6]\",
			\"$_POST[destino6]\",
			\"$_POST[control6]\",
			\"$_POST[cantidad6]\",
			\"$_POST[medida6]\",
			\"$_POST[moneda6]\",
			\"$_POST[precio6]\",
			\"$_POST[total6]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';


if(!($_POST['codigo7']=='' and $_POST['grupo7']=='' and $_POST['descripcion7']=='' and $_POST['destino7']=='' and $_POST['control7']=='' and $_POST['cantidad7']=='' and $_POST['medida7']=='' and $_POST['moneda7']=='' and $_POST['precio7']=='' and $_POST['total7']==''))
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
			\"$_POST[codigo7]\",
			\"$_POST[grupo7]\",
			\"$_POST[descripcion7]\",
			\"$_POST[destino7]\",
			\"$_POST[control7]\",
			\"$_POST[cantidad7]\",
			\"$_POST[medida7]\",
			\"$_POST[moneda7]\",
			\"$_POST[precio7]\",
			\"$_POST[total7]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';

if(!($_POST['codigo8']=='' and $_POST['grupo8']=='' and $_POST['descripcion8']=='' and $_POST['destino8']=='' and $_POST['control8']=='' and $_POST['cantidad8']=='' and $_POST['medida8']=='' and $_POST['moneda8']=='' and $_POST['precio8']=='' and $_POST['total8']==''))
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
			\"$_POST[codigo8]\",
			\"$_POST[grupo8]\",
			\"$_POST[descripcion8]\",
			\"$_POST[destino8]\",
			\"$_POST[control8]\",
			\"$_POST[cantidad8]\",
			\"$_POST[medida8]\",
			\"$_POST[moneda8]\",
			\"$_POST[precio8]\",
			\"$_POST[total8]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';

if(!($_POST['codigo9']=='' and $_POST['grupo9']=='' and $_POST['descripcion9']=='' and $_POST['destino9']=='' and $_POST['control9']=='' and $_POST['cantidad9']=='' and $_POST['medida9']=='' and $_POST['moneda9']=='' and $_POST['precio9']=='' and $_POST['total9']==''))
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
			\"$_POST[codigo9]\",
			\"$_POST[grupo9]\",
			\"$_POST[descripcion9]\",
			\"$_POST[destino9]\",
			\"$_POST[control9]\",
			\"$_POST[cantidad9]\",
			\"$_POST[medida9]\",
			\"$_POST[moneda9]\",
			\"$_POST[precio9]\",
			\"$_POST[total9]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';

if(!($_POST['codigo10']=='' and $_POST['grupo10']=='' and $_POST['descripcion10']=='' and $_POST['destino10']=='' and $_POST['control10']=='' and $_POST['cantidad10']=='' and $_POST['medida10']=='' and $_POST['moneda10']=='' and $_POST['precio10']=='' and $_POST['total10']==''))
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
			\"$_POST[codigo10]\",
			\"$_POST[grupo10]\",
			\"$_POST[descripcion10]\",
			\"$_POST[destino10]\",
			\"$_POST[control10]\",
			\"$_POST[cantidad10]\",
			\"$_POST[medida10]\",
			\"$_POST[moneda10]\",
			\"$_POST[precio10]\",
			\"$_POST[total10]\",
			0
			)";
	$query = $con->query($sql);
print 'cuarta opcion';



}}

?>
<a href="../html2pdf/examples/exemple02.php?id=<?php echo $row; ?>" target="_blank">
	descargar pdf
</a>

<a href="http://20.0.0.196/formularios/views/view_form200.php">VOLVER</a>