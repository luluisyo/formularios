<?php
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}


	include "conexion.php";
	//$encriptado=$_POST['password'];
$sql = "UPDATE form200 SET
			requiriente ='".$_POST['requiriente']."',
			emprersa = '".$_POST['empresa']."',
			area = '".$_POST['area']."',
			proveedor = '".$_POST['proveedor']."',
			cheque = '".$_POST['cheque']."',
			proforma = '".$_POST['proforma']."',
			condicion = '".$_POST['condicion']."',
			fecha = '".$_POST['fecha']."',
			proyecto = '".$_POST['proyecto']."' 
			WHERE idform = '".$_POST['dato']."';";

	$query = $con->query($sql);	


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo1']."',
			grupo = '".$_POST['grupo1']."',
			descripcion = '".$_POST['descripcion1']."',
			destino = '".$_POST['destino1']."',
			control = '".$_POST['control1']."',
			cantidad = '".$_POST['cantidad1']."',
			unidad = '".$_POST['medida1']."',
			moneda = '".$_POST['moneda1']."',
			precio = '".$_POST['precio1']."',
			total = '".$_POST['total1']."'
			WHERE idreq = '".$_POST['r1']."';";


	$query = $con->query($sql);


	$query = $con->query($sql);
if(!($_POST['codigo2']=='' and $_POST['grupo2']=='' and $_POST['descripcion2']=='' and $_POST['destino2']=='' and $_POST['control2']=='' and $_POST['cantidad2']=='' and $_POST['medida2']=='' and $_POST['moneda2']=='' and $_POST['precio2']=='' and $_POST['total2']=='')){

$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo2']."',
			grupo = '".$_POST['grupo2']."',
			descripcion = '".$_POST['descripcion2']."',
			destino = '".$_POST['destino2']."',
			control = '".$_POST['control2']."',
			cantidad = '".$_POST['cantidad2']."',
			unidad = '".$_POST['medida2']."',
			moneda = '".$_POST['moneda2']."',
			precio = '".$_POST['precio2']."',
			total = '".$_POST['total2']."'
			WHERE idreq = '".$_POST['r2']."';";

	$query = $con->query($sql);

if(!($_POST['codigo3']=='' and $_POST['grupo3']=='' and $_POST['descripcion3']=='' and $_POST['destino3']=='' and $_POST['control3']=='' and $_POST['cantidad3']=='' and $_POST['medida3']=='' and $_POST['moneda3']=='' and $_POST['precio3']=='' and $_POST['total3']=='')){

$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo3']."',
			grupo = '".$_POST['grupo3']."',
			descripcion = '".$_POST['descripcion3']."',
			destino = '".$_POST['destino3']."',
			control = '".$_POST['control3']."',
			cantidad = '".$_POST['cantidad3']."',
			unidad = '".$_POST['medida3']."',
			moneda = '".$_POST['moneda3']."',
			precio = '".$_POST['precio3']."',
			total = '".$_POST['total3']."'
			WHERE idreq = '".$_POST['r3']."';";


	$query = $con->query($sql);

if(!($_POST['codigo4']=='' and $_POST['grupo4']=='' and $_POST['descripcion4']=='' and $_POST['destino4']=='' and $_POST['control4']=='' and $_POST['cantidad4']=='' and $_POST['medida4']=='' and $_POST['moneda4']=='' and $_POST['precio4']=='' and $_POST['total4']==''))

$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo4']."',
			grupo = '".$_POST['grupo4']."',
			descripcion = '".$_POST['descripcion4']."',
			destino = '".$_POST['destino4']."',
			control = '".$_POST['control4']."',
			cantidad = '".$_POST['cantidad4']."',
			unidad = '".$_POST['medida4']."',
			moneda = '".$_POST['moneda4']."',
			precio = '".$_POST['precio4']."',
			total = '".$_POST['total4']."'
			WHERE idreq = '".$_POST['r4']."';";


	$query = $con->query($sql);

if(!($_POST['codigo5']=='' and $_POST['grupo5']=='' and $_POST['descripcion5']=='' and $_POST['destino5']=='' and $_POST['control5']=='' and $_POST['cantidad5']=='' and $_POST['medida5']=='' and $_POST['moneda5']=='' and $_POST['precio5']=='' and $_POST['total5']==''))


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo5']."',
			grupo = '".$_POST['grupo5']."',
			descripcion = '".$_POST['descripcion5']."',
			destino = '".$_POST['destino5']."',
			control = '".$_POST['control5']."',
			cantidad = '".$_POST['cantidad5']."',
			unidad = '".$_POST['medida5']."',
			moneda = '".$_POST['moneda5']."',
			precio = '".$_POST['precio5']."',
			total = '".$_POST['total5']."'
			WHERE idreq = '".$_POST['r5']."';";


	$query = $con->query($sql);

if(!($_POST['codigo6']=='' and $_POST['grupo6']=='' and $_POST['descripcion6']=='' and $_POST['destino6']=='' and $_POST['control6']=='' and $_POST['cantidad6']=='' and $_POST['medida6']=='' and $_POST['moneda6']=='' and $_POST['precio6']=='' and $_POST['total6']==''))


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo6']."',
			grupo = '".$_POST['grupo6']."',
			descripcion = '".$_POST['descripcion6']."',
			destino = '".$_POST['destino6']."',
			control = '".$_POST['control6']."',
			cantidad = '".$_POST['cantidad6']."',
			unidad = '".$_POST['medida6']."',
			moneda = '".$_POST['moneda6']."',
			precio = '".$_POST['precio6']."',
			total = '".$_POST['total6']."'
			WHERE idreq = '".$_POST['r6']."';";


	$query = $con->query($sql);


if(!($_POST['codigo7']=='' and $_POST['grupo7']=='' and $_POST['descripcion7']=='' and $_POST['destino7']=='' and $_POST['control7']=='' and $_POST['cantidad7']=='' and $_POST['medida7']=='' and $_POST['moneda7']=='' and $_POST['precio7']=='' and $_POST['total7']==''))


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo7']."',
			grupo = '".$_POST['grupo7']."',
			descripcion = '".$_POST['descripcion7']."',
			destino = '".$_POST['destino7']."',
			control = '".$_POST['control7']."',
			cantidad = '".$_POST['cantidad7']."',
			unidad = '".$_POST['medida7']."',
			moneda = '".$_POST['moneda7']."',
			precio = '".$_POST['precio7']."',
			total = '".$_POST['total7']."'
			WHERE idreq = '".$_POST['r7']."';";


	$query = $con->query($sql);

if(!($_POST['codigo8']=='' and $_POST['grupo8']=='' and $_POST['descripcion8']=='' and $_POST['destino8']=='' and $_POST['control8']=='' and $_POST['cantidad8']=='' and $_POST['medida8']=='' and $_POST['moneda8']=='' and $_POST['precio8']=='' and $_POST['total8']==''))


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo8']."',
			grupo = '".$_POST['grupo8']."',
			descripcion = '".$_POST['descripcion8']."',
			destino = '".$_POST['destino8']."',
			control = '".$_POST['control8']."',
			cantidad = '".$_POST['cantidad8']."',
			unidad = '".$_POST['medida8']."',
			moneda = '".$_POST['moneda8']."',
			precio = '".$_POST['precio8']."',
			total = '".$_POST['total8']."'
			WHERE idreq = '".$_POST['r8']."';";


	$query = $con->query($sql);

if(!($_POST['codigo9']=='' and $_POST['grupo9']=='' and $_POST['descripcion9']=='' and $_POST['destino9']=='' and $_POST['control9']=='' and $_POST['cantidad9']=='' and $_POST['medida9']=='' and $_POST['moneda9']=='' and $_POST['precio9']=='' and $_POST['total9']==''))


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo9']."',
			grupo = '".$_POST['grupo9']."',
			descripcion = '".$_POST['descripcion9']."',
			destino = '".$_POST['destino9']."',
			control = '".$_POST['control9']."',
			cantidad = '".$_POST['cantidad9']."',
			unidad = '".$_POST['medida9']."',
			moneda = '".$_POST['moneda9']."',
			precio = '".$_POST['precio9']."',
			total = '".$_POST['total9']."'
			WHERE idreq = '".$_POST['r9']."';";


	$query = $con->query($sql);

if(!($_POST['codigo10']=='' and $_POST['grupo10']=='' and $_POST['descripcion10']=='' and $_POST['destino10']=='' and $_POST['control10']=='' and $_POST['cantidad10']=='' and $_POST['medida10']=='' and $_POST['moneda10']=='' and $_POST['precio10']=='' and $_POST['total10']==''))


$sql = "UPDATE requerimiento SET
			codigo = '".$_POST['codigo10']."',
			grupo = '".$_POST['grupo10']."',
			descripcion = '".$_POST['descripcion10']."',
			destino = '".$_POST['destino10']."',
			control = '".$_POST['control10']."',
			cantidad = '".$_POST['cantidad10']."',
			unidad = '".$_POST['medida10']."',
			moneda = '".$_POST['moneda10']."',
			precio = '".$_POST['precio10']."',
			total = '".$_POST['total10']."'
			WHERE idreq = '".$_POST['r10']."';";


	$query = $con->query($sql);



}}

?>
<a href="../html2pdf/examples/exemple02.php?id=<?php echo $_POST['dato']; ?>" target="_blank">
	descargar pdf
</a>

<a href="http://20.0.0.196/formularios/views/view_form200.php">VOLVER</a>