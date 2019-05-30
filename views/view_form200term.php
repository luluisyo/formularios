<?php
 
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}
if(!($_SESSION["tipo"]=='m')){
    print "<script>window.location='./view_form200usu.php';</script>";
}

 
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Requerimientos</title>
  <link rel="shortcut icon" href="../assets/favicono.ico">
    <link rel='stylesheet prefetch' href='../plugins/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='../plugins/css/jquery.dataTables.min.css'>
    <link rel='stylesheet prefetch' href='../plugins/css/buttons.dataTables.min.css'>
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->
    <link rel="stylesheet" type="text/css" href="../css/modal.css">
     <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->   
  <link rel="shortcut icon" href="../assets/favicono.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/modal.css">


    <script src="../js/modernizr.js"></script> <!-- Modernizr -->


    <style type="text/css">
        body{
              background: url(../assets/index.jpg) fixed;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        padding-top: 3%;
        }

        input{
            border: none;
            content: " adsfasdf";
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 15px;
        }
        tr th{
          background-color: #5974FF;
          color: #fff;
            text-align: center;
        }
        .valores{
            text-align: right;
        }
        @font-face{
            font-family: fuentenueva;
            src: url(../fonts/quantifypremium/webdesignpro.ttf);
        }
        .titulo{
            font-size: 40px;
            font-family: fuentenueva;
            color: #fff;
        }
        #unasemana{
            background-color: #6FFF5C;
        }
        #dossemanas{
            background-color: #FFF95E;
        }
        #tressemanas{
            background-color: #FF9E50;
        }
        #cuatrosemanas{
          background-color: #FF9494;
        }
        li:hover{
          background-color: #fff;
        }
    </style>
</head>
<body>
  <nav class="cd-stretchy-nav">
        <a class="cd-nav-trigger" href="#0">
            
            <span aria-hidden="true"></span>
        </a>
        <ul>
            <li><a href="../views/add_form200.php"><span><font color="blue">REGISTRAR FORMULARIO</font></span></a></li>
            <li><a href="../views/view_form200.php" class="active"><span><font color="blue">REQUERIMIKENTOS</font></span></a></li>
            <li><a href="../views/view_form200falt.php"><span><font color="blue">REQUERIMIENTOS FALTANTES</font></span></a></li>
            <li><a href="../views/view_user.php"><span><font color="blue">USUARIOS</font></span></a></li>
            <li><a href="../views/add_user.php"><span><font color="blue">CREAR NUEVO USUARIO</font></span></a></li>
            <li><a href="../controller/logout.php"><span><font color="blue">Salir: <?php echo $_SESSION["nombre"]  ?></font></span></a></li>
        </ul>

        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>
    <h1 class="titulo"><center>REQUERIMIENTOS REGISTRADOS</center></h1>

  <table id="example" class="display table table-bordered table-hover nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID FORMULARIO</th>
                <th>REQUIRIENTE</th>
                <th>EMPRESA</th>
                <th>AREA</th>
                <th>PROVEEDOR</th>
                <th>FECHA</th>
                <th>CODIGO</th>
                <th>GRUPO</th>
                <th>DESCRIPCION</th>
                <th>DESTINO</th>
                <th>CONTROL</th>
                <th>CANTIDAD</th>
                <th>UNIDAD</th>
                <th>MONEDA</th>
                <th>PRECIO</th>
                <th>OPERACIONES</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID FORMULARIO</th>
                <th>REQUIRIENTE</th>
                <th>EMPRESA</th>
                <th>AREA</th>
                <th>PROVEEDOR</th>
                <th>FECHA</th>
                <th>CODIGO</th>
                <th>GRUPO</th>
                <th>DESCRIPCION</th>
                <th>DESTINO</th>
                <th>CONTROL</th>
                <th>CANTIDAD</th>
                <th>UNIDAD</th>
                <th>MONEDA</th>
                <th>PRECIO</th>
                <th>OPERACIONES</th>
            </tr>
        </tfoot>
        <tbody>
            <?php
            $count=0;
            $campo=null;
            $suma=0;
            require("../controller/conexion.php");
            $sql=("select f.idform,f.requiriente,f.emprersa,f.area,f.proveedor,f.fecha,r.codigo,r.grupo,r.descripcion,r.destino,r.control,r.cantidad,r.unidad,r.moneda,r.precio,r.sw,DATEDIFF(CURDATE(),f.fecha) as dias,r.idreq from form200 f, requerimiento r where f.idform=r.idform and r.sw=1");
            $query=mysqli_query($con,$sql);
            while($arreglo=mysqli_fetch_array($query)){
              $count++;
              if(($arreglo[15]==0) && ($arreglo[16]>=1)){
             echo "<tr  style='background-color: rgba(245, 139, 108, 0.9882352941176471);'>";}
             else{if ($arreglo[15]==0) {
                echo "<tr  style='background-color: rgba(255, 180, 18, 0.9607843137254902);'>";
             }else{
                echo "<tr id='$campo'>";}}

              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";
              echo "<td>$arreglo[8]</td>";
              echo "<td>$arreglo[9]</td>";
              echo "<td>$arreglo[10]</td>";
              echo "<td>$arreglo[11]</td>";
              echo "<td>$arreglo[12]</td>";
              echo "<td>$arreglo[13]</td>";
              echo "<td>$arreglo[14]</td>";
              
              
              echo "<td><a class='button' href='../views/update_form200.php?id=$arreglo[0]'>Modificar</a> <a class='button' href='?id=$arreglo[17]#eli' style='background:#FF3B3B'>Eliminar</a>
              <a class='button' href='?id=$arreglo[0]#openModal'>VER</a> ";
              if ($arreglo[15]==0) {
               echo "<a class='button' href='?id=$arreglo[17]#term'>Finalizar</a>";
              }
              else{
               echo "Finalizado";
              }
              echo "</td>";
              echo "</tr>";
            }
            mysqli_close($con);
            ?>
        </tbody>
    </table>



<div  class='modalbg' id="term" >
    <div class='dialog' style="width: 30%;">
        <a href='#close' title='Close' class='close'>X</a>
        DESEA DAR POR FINALIZADO EL REQUERIMIENTO?<br><br><br><br>
        <a href='../controller/finalizar.php?id=<?php echo $_GET['id'] ?>' title='button' class='button'>ACEPTAR</a>      <a href='#close' class='button' >CANCEL</a>      
                    </div></div>


<div  class='modalbg' id="eli" >
    <div class='dialog' style="width: 30%;">
        <a href='#close' title='Close' class='close'>X</a>
        DESEA ELIMINAR EL REQUERIMIENTO?<br><br><br><br>
        <a href='../controller/delete_form200.php?id=<?php echo $_GET['id'] ?>' title='button' style='background:#FF3B3B' class='button'>ACEPTAR</a>
        <a href='#close' class='button' >CANCEL</a>      
                    </div></div>



          
                   <div  class='modalbg' id="openModal" >
                        <div class='dialog'>
                          <a href='#close' title='Close' class='close'>X</a>
<?php
require("../controller/conexion.php");
$query=mysqli_query($con,("select * from form200 where idform=".$_GET['id']));
$arreglo=mysqli_fetch_array($query);
$query1=mysqli_query($con,("select * from requerimiento where idform=".$_GET['id']));
?>
    <table class="display table table-bordered table-hover nowrap" cellspacing="0" width="100%">

        <tr>  
            <td style="width: 25%; text-align: center;"><img src="../html2pdf/examples/res/tcpdf_logo.jpg" alt="" ></td>
            <td style="width: 55%; text-align: center;"><h3>GERENCIA DE ADMINISTRACION Y FINANZAS</h3>                           
 REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS

FORMULARIO 200                          
</td>
            <td style="width: 20%; text-align: center; "><?php echo $arreglo[0]; ?></td>
        </tr>
    </table>
    <br>

    <center>
    <table class="display table-bordered table-hover nowrap">
        
    <thead>
            <tr>
                <th colspan="2">DATOS BASICOS</th>
            </tr>
        </thead>
    <tr>
        <td>REQUIRIENTE DE LA COMPRA:</td>
        <td><?php echo $arreglo[2]; ?></td>
    </tr>
        <tr>
        <td>EMPRESA:</td>
        <td><?php echo $arreglo[3]; ?></td>
    </tr>

    <tr>
        <td>AREA:</td>
        <td><?php echo $arreglo[4]; ?></td>
    </tr>

    <tr>
        <td>PROVEEDOR:</td>
        <td><?php echo $arreglo[5]; ?></td>
    </tr>

    <tr>
        <td>CHEQUE A NOMBRE DE:</td>
        <td><?php echo $arreglo[6]; ?></td>
    </tr>

    <tr>
        <td>PROFORMA O COTIZACION APROBADA ADJUNTA:</td>
        <td><?php echo $arreglo[7]; ?></td>
    </tr>
        <tr>
        <td>CONDICION DE PAO SEGUN PROFORMA:</td>
        <td><?php echo $arreglo[8]; ?></td>
    </tr>
        <tr>
        <td>FECHA DE REQUERIEMIENTO:</td>
        <td><?php echo $arreglo[9]; ?></td>
    </tr>
        <tr>
        <td>PROYECTO:</td>
        <td><?php echo $arreglo[10]; ?></td>
    </tr>

</table></center>
<br>
<table align="center" border="1" class="display table table-bordered table-hover nowrap" cellspacing="0" width="100%">
    <tr>
        <th>
        ITEM    
        </th>
        <th>
            CODIGO
        </th>
     
        <th>
            GRUPO
        </th>
     
        <th>
            DESCRIPCION
        </th>
                <th>
            DESTINO
        </th>
                <th>
            CONTROL
        </th>
             <th>
            CANTIDAD
        </th>
                <th>
            MEDIDA
        </th>
                <th>
            MONEDA
        </th>
                <th>
            PRECIO
        </th>
                <th>
            TOTAL
        </th>
     </tr>


    <?php 
    $contador=1;
while($arreglo1=mysqli_fetch_array($query1)){
echo '<tr><td>'.$contador.'</td><td>'.$arreglo1[0].'</td><td>'.$arreglo1[1].'</td><td>'.$arreglo1[2].'</td><td>'.$arreglo1[3].'</td><td>'.$arreglo1[4].'</td><td>'.$arreglo1[5].'</td><td>'.$arreglo1[6].'</td><td>'.$arreglo1[7].'</td><td>'.$arreglo1[8].'</td><td>'.$arreglo1[9].'</td></tr>';
$contador=$contador+1;
}
mysqli_close($con);
?>
<tr><td><a class='button' href="../html2pdf/examples/exemple02.php?id=<?php echo $_GET['id']; ?>" target="_blank">PDF</a></td></tr>
</table>
</div></div>

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
    ]
    } );
} );
    </script>
</body>
</html>
