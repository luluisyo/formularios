<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */
    // get the HTML
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

<page style="font-size: 10pt">
    
    <table style="width: 90%;" align="center">
        <tr>
            <td style="width: 20%; text-align: center; "><img src="./res/tcpdf_logo.jpg" alt="" ></td>
            <td style="width: 50%; text-align: center;">GERENCIA DE ADMINISTRACION Y FINANZAS                           
<br>FORMULARIO 200 - REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS                          
</td>
            <td style="width: 30%; text-align: right; "></td>
        </tr>
    </table >
    
<table style="width: 90%;" align="center" border="1">
        <tr>
        <td colspan="2" align="center">DATOS BASICOS</td>
    </tr>
    <tr>
        <td>REQUIRIENTE DE LA COMPRA:</td>
        <td><?php echo $row->requiriente; ?></td>
    </tr>
        <tr>
        <td>EMPRESA:</td>
        <td><?php echo $row->emprersa; ?></td>
    </tr>

    <tr>
        <td>AREA:</td>
        <td><?php echo $row->area; ?></td>
    </tr>

    <tr>
        <td>PROVEEDOR:</td>
        <td><?php echo $row->proveedor; ?></td>
    </tr>

    <tr>
        <td>CHEQUE A NOMBRE DE:</td>
        <td><?php echo $row->cheque; ?></td>
    </tr>

    <tr>
        <td>PROFORMA O COTIZACION APROBADA ADJUNTA:</td>
        <td><?php echo $row->proforma; ?></td>
    </tr>
        <tr>
        <td>CONDICION DE PAO SEGUN PROFORMA:</td>
        <td><?php echo $row->condicion; ?></td>
    </tr>
        <tr>
        <td>FECHA DE REQUERIEMIENTO:</td>
        <td><?php echo $row->fecha; ?></td>
    </tr>
        <tr>
        <td>PROYECTO:</td>
        <td><?php echo $row->proyecto; ?></td>
    </tr>

</table>

<table style="width: 100%; border: solid 1px black;" align="center">
    <tr>
        <th style="text-align: center;    width: 2%">
            ITEM    
        </th>
        <th style="text-align: center;    width: 9%">
            CODIGO
        </th>
        <th style="text-align: center;    width: 15%">
            GRUPO
        </th>
        <th style="text-align: center;    width: 25%">
            DESCRIPCION
        </th>
        <th style="text-align: center;    width: 7%">
            DESTINO
        </th>
                <th style="text-align: center;    width: 7%">
            CONTROL
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
            PRECIO
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

<tr><td colspan="10">TOTAL</td>
<td>$cont2</td>
</tr>
    


</table>


</page>
  <?php  $content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'carta', 'fr');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple01.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
