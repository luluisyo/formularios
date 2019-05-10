<?php
	include "conexion.php";
	//$encriptado=$_POST['password'];
	$sql = "insert into form(
		requiriente,
		empresa,
		area,
		proveedor,
		cheque,
		proforma,
		condicion,
		fecha,
		proyecto) values (
			\"$_POST[requiriente]\",
			\"$_POST[empresa]\",
			\"$_POST[area]\",
			\"$_POST[proveedor]\",
			\"$_POST[cheque]\",
			\"$_POST[proforma]\",
			\"$_POST[condicion]\",
			\"$_POST[fecha]\",
			\"$_POST[proyecto]\"
		)";
	$query = $con->query($sql);
	if($query!=null){
		print " tiene acceso al sistewindow.location";
	}
	else{
		echo "Algo anda al en la consulta";
	}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Usuarios con acceso al sistema</title>
    <link rel="shortcut icon" href="../assets/favicono.ico">
    <link rel='stylesheet prefetch' href='../plugins/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='../plugins/css/jquery.dataTables.min.css'>
    <link rel='stylesheet prefetch' href='../plugins/css/buttons.dataTables.min.css'>
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <style type="text/css">
        body{
            padding: 25px;
            background-color: #FFABAB;
        }

        input{
            border: none;
            content: " adsfasdf";
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 15px;
        }
        tr th{
            text-align: center;
        }
        .valores{
            text-align: right;
        }
        @font-face{
            font-family: fuentenueva;
            src: url(../font/quantifypremium/webdesignpro.ttf);
        }
        .titulo{
            font-size: 40px;
            font-family: fuentenueva;
        }
    </style>
</head>
<body>
    <nav class="cd-stretchy-nav">
        <a class="cd-nav-trigger" href="#0">
            
            <span aria-hidden="true"></span>
        </a>

        <ul>
            <li><a href="../views/add_user.php"><span><font color="red">Añadir nuevos usuarios</font></span></a></li>
            <li><a href="../controller/logout.php"><span><font color="red">Salir: <?php echo $_SESSION["nombre"]  ?></font></span></a></li>
        </ul>

        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>
    <br>
    <br>
    <h1 class="titulo"><center>USUARIOS CON ACCESO AL SISTEMA</center></h1>
    <br>
    <br>
    <br>
  <table id="example" class="display table table-bordered table-hover nowrap compact" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>CARNET DE IDENTIDAD</th>
                <th>NOMBRES</th>
                <th>APELLIDOS</th>
                <th>GENERO</th>
                <th>CORREO ELECTRONICO</th>
                <th>NOMBRE DE USUARIO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        
        <tbody>
        <tr><td><?php print $_POST['requiriente'] ?></td>
        	<td>DOS</td>
        	<td>TRES</td>
        	<td>CUATRO</td>
        	<td>CINCO</td>
        	<td>SEIS</td>
        	<td>SIETE</td>
			
        </tr>
      </tbody>
    </table>
    <script src='../plugins/js/jquery-2.2.4.min.js'></script>
    <script src='../plugins/js/jquery.dataTables.min.js'></script>
    <script src='../plugins/js/dataTables.buttons.min.js'></script>
    <script src='../plugins/js/buttons.flash.min.js'></script>
    <script src='../plugins/js/jszip.min.js'></script>
    <script src='../plugins/js/pdfmake.min.js'></script>
    <script src='../plugins/js/vfs_fonts.js'></script>
    <script src='../plugins/js/buttons.html5.min.js'></script>
    <script src='../plugins/js/buttons.print.min.js'></script>
    <script src="../js/cabecera.js"></script> 
    <script type="text/javascript">
        $(document).ready(function() {

    $('#example').DataTable( {
        "paging":   false,
        "info":     false,
        language: {
        "decimal": ".",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    //Añadir Scroll
        //"scrollY":        "50vh",//define el tamaño o dinamismo de la tabla
        //"scrollCollapse": true,
        //"paging":         false,
    dom: 'Bfrtip',
        buttons: [
            'excel',
            'pdf'
    ]
    } );
} );
    </script>
    
</body>
</html>