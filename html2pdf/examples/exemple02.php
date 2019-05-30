<?php

    ob_start();
        $var_servidor_bd="localhost"; // Servidor de la base de datos, casi siempre localhost
     $var_nombre_bd="rekadmin";   // Nombre de la base de datos
     $var_usuario_bd="root";  // Usuario de la base de datos
     $var_password_bd="";
      // Contraseña de la base de datos
     $link = mysqli_connect($var_servidor_bd, $var_usuario_bd, $var_password_bd, $var_nombre_bd);
 

 $row= ($link->query("select * from form200 where idform=".$_GET['id']))->fetch_object();
 $requi= ($link->query("select * from requerimiento where idform=".$_GET['id']));
 
?>
<style type="text/css">
<!--
table
{
    width:  100%;
   

}

th
{
    text-align: center;
    border: solid 1px black;
    background: #dfdedd;
}

td
{
    text-align: left;
    border: solid 1px black;
}

td.col1
{
    border: solid 1px black;
    text-align: right;
}

-->
</style>

<page style="font-size: 10pt">
    

    <table style="width: 90%; font-size: 16px;" align="center">

        <tr>
            <td style="width: 20%; text-align: center; "><img src="./res/tcpdf_logo.jpg" alt="" ></td>
            <td style="width: 65%; text-align: center;">GERENCIA DE ADMINISTRACION Y FINANZAS<br>                           
 REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS
FORMULARIO 200                          
</td>
            <td style="width: 15%; text-align: center;font-size:10px">
                <h5>CODIGO: <?php echo $row->idform; ?></h5>
                    Rev:0<br>
                    Pag:1 de 1
                </td>
        </tr>
    </table>
    <br>

        <table style="width: 90%; font-size: 12px;   border-radius:9px; background-color: #dfdedd;" align="center">
        <tr>
            <td style="width: 70%; text-align: center; border: none;">DATOS BASICOS</td>
            <td style="width: 30%; text-align: center; border: none;"></td>
        </tr>
    </table>
    
    <table style="width: 90%; font-size: 13px;" align="center">
    <tr>
        <td style="width: 30%;">REQUIRIENTE DE LA COMPRA:</td>
        <td style="width: 40%;"><?php echo $row->requiriente; ?></td>
        <td style="width: 5%; border: none;"></td>
        <td style="width: 12%; border: none;"></td>
        <td style="width: 13%; border: none;"></td>
    </tr>
        <tr>
        <td style="width: 30%;">EMPRESA:</td>
        <td style="width: 40%;"><?php echo $row->emprersa; ?></td>
        <td style="width: 5%; border: none;" rowspan="2"></td>
        <td style="width: 12%; font-size: 9px;" rowspan="2">USO EXCLUSIVO DEL DEPARTAMENTO DE CO MPRAS</td>
        <td style="width: 13%; font-size: 9px;" rowspan="2"></td>
    </tr>

    <tr>
        <td style="width: 30%;">AREA:</td>
        <td style="width: 40%;"><?php echo $row->area; ?></td>
        
        
    </tr>

    <tr>
        <td style="width: 30%;">PROVEEDOR:</td>
        <td style="width: 40%;"><?php echo $row->proveedor; ?></td>
        <td style="width: 5%; border: none;"></td>
        <td style="width: 12%; font-size: 9px;">Fecha de Res.</td>
        <td style="width: 13%;"></td>
    </tr>

    <tr>
        <td style="width: 30%;">CHEQUE A NOMBRE DE:</td>
        <td style="width: 40%;"><?php echo $row->cheque; ?></td>
        <td style="width: 5%; border: none;"></td>
        <td style="width: 12%; font-size: 9px;" >Persona Resp.</td>
        <td style="width: 13%;"></td>
    </tr>

    <tr>
        <td style="width: 30%;">PROFORMA O COTIZACION APROBADA ADJUNTA:</td>
        <td style="width: 40%;"><?php echo $row->proforma; ?></td>
        <td style="width: 5%; border: none;" rowspan="2"></td>
        <td style="width: 12%; font-size: 9px;" rowspan="2">Observacion</td>
        <td style="width: 13%;" rowspan="2"></td>
    </tr>
        <tr>
        <td style="width: 30%;">CONDICION DE PAO SEGUN PROFORMA:</td>
        <td style="width: 40%;"><?php echo $row->condicion; ?></td>
        
    </tr>
        <tr>
        <td style="width: 30%;">FECHA DE REQUERIEMIENTO:</td>
        <td style="width: 40%;"><?php echo $row->fecha; ?></td>
        <td style="width: 5%; border: none;" rowspan="2"></td>
        <td style="width: 12%; font-size: 9px;" rowspan="2">Requirie control de Calidad</td>
        <td style="width: 13%;" rowspan="2"></td>
    </tr>
        <tr>
        <td style="width: 30%;">PROYECTO:</td>
        <td style="width: 40%;"><?php echo $row->proyecto; ?></td>
    </tr>

</table>
<br>
<table style="width: 100%; font-size: 12px;   border-radius:9px; background-color: #dfdedd; " align="center" >
        <tr>
            <td style="width: 100%; text-align: center; border: none;">DETALLE DE LA COMPRA</td>
        </tr>
    </table >
<br>
    <table style="width: 100%; font-size: 12px;   border-radius:9px; background-color: #dfdedd; " align="center" >
        <tr>
            <td style="width: 100%; text-align: center; border: none;">PRODUCTOS DE INVENTARIO</td>
        </tr>
    </table >
<br>
<table style="width: 100%;  font-size:10px" align="center">
    <tr>
        <th style="text-align: center;    width: 2%">
            ITEM    
        </th>
        <th style="text-align: center;    width: 9%">
            CODIGO DEL ARTICULO
        </th>
        <th style="text-align: center;    width: 15%">
            GRUPO DE ARTICULO
        </th>
        <th style="text-align: center;    width: 25%">
            DESCRIPCION MATERIAL
        </th>
        <th style="text-align: center;    width: 7%">
            DESTINO DESTINO
        </th>
                <th style="text-align: center;    width: 7%">
            Control de Calidad SI/NO
        </th>
             <th style="text-align: center;    width: 7%">
            CANTIDAD 
        </th>
                <th style="text-align: center;    width: 5%">
            U/M
        </th>
                <th style="text-align: center;    width: 7%">
            MONEDA
        </th>
                <th style="text-align: center;    width: 6%">
            PRECIO UNIT
        </th>
                <th style="text-align: center;    width: 5%">
            TOTAL
        </th>
     </tr>


    <?php 
    $contador=1;
    $cont2=0;
while($row2= $requi->fetch_object()){
echo '<tr>
<td style="text-align: center;    width: 2%">'.$contador.'</td>
<td style="text-align: center;    width: 9%">'.$row2->codigo.'</td>
<td style="text-align: center;    width: 15%">'.$row2->grupo.'</td>
<td style="text-align: center;    width: 30%">'.$row2->descripcion.'</td>
<td style="text-align: center;    width: 7%">'.$row2->destino.'</td>
<td style="text-align: center;    width: 7%">'.$row2->control.'</td>
<td style="text-align: center;    width: 7%">'.$row2->cantidad.'</td>
<td style="text-align: center;    width: 5%">'.$row2->unidad.'</td>
<td style="text-align: center;    width: 7%">'.$row2->moneda.'</td>
<td style="text-align: center;    width: 6%">'.$row2->precio.'</td>
<td style="text-align: center;    width: 5%">'.$row2->total.'</td>
</tr>';
$cont2=$cont2+$row2->total;
$contador=$contador+1;
}
     

?>

<tr><td colspan="10" style="text-align: center;    width: 95%">TOTAL</td>
<td style="text-align: center;    width: 5%"><?php echo $cont2 ?></td>
</tr>

</table>

        <table style="width: 100%; font-size: 12px;   border-radius:9px; background-color: #dfdedd; " align="center" >
        <tr>
            <td style="width: 100%; text-align: center; border: none;">Observaciones y recomendaciones: (Datos adicionales a la pro-forma o cotizacion del proveedor que no fueron incluidos)</td>
        </tr>
    </table>
    <br>


        <table style="width: 100%; font-size: 12px;   border-radius:9px; background-color: #dfdedd; " align="center" >
        <tr>
            <td style="width: 100%; text-align: center; border: none;">Compras para pruebas de laboratotio</td>
        </tr>
    </table><br>
    <table style="width: 100%; font-size: 12px; " align="center" >
        <tr>
            <td style="width: 15%; text-align: center; background-color: #dfdedd; border: none;">Elaborado por;<br>(Nombre,Cargo y Firma)</td>
            <td style="width: 14%; text-align: center;"><?php echo $row->requiriente; ?></td>
            <td style="width: 14%; text-align: center;"><br/><br/><br/></td>
            <td style="width: 14%; text-align: center;"></td>
            <td style="width: 15%; text-align: center; background-color: #dfdedd; border: none;">Autorizao por;<br>(Nombre,Cargo y Firma)</td>
    
            <td style="width: 14%; text-align: center;"></td>
            <td style="width: 14%; text-align: center;"></td>
        
        </tr>
    </table>


</page>
  <?php  $content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('L', 'Letter', 'en');
        $html2pdf->setDefaultFont('Arial','',20); 
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
