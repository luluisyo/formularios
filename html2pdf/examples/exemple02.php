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
    border: solid 1px #5544DD;

}

th
{
    text-align: center;
    border: solid 1px #113300;
    background: #EEFFEE;
}

td
{
    text-align: left;
    border: solid 1px #55DD44;
}

td.col1
{
    border: solid 1px red;
    text-align: right;
}

-->
</style>

<page style="font-size: 10pt">
    

    <table style="width: 90%; font-size: 16px;" align="center">

        <tr>
            <td style="width: 25%; text-align: center; "><img src="./res/tcpdf_logo.jpg" alt="" ></td>
            <td style="width: 55%; text-align: center;"><h3>GERENCIA DE ADMINISTRACION Y FINANZAS</h3>                           
 REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS

FORMULARIO 200                          
</td>
            <td style="width: 20%; text-align: center; "><?php echo $row->idform; ?></td>
        </tr>
    </table >
z90e-2hwh
        <table style="width: 90%; font-size: 16px;" align="center" >
        <tr>
            <td style="width: 60%; text-align: center;background-color: #5544DD;  border-radius:9px;">DATOS BASICOS</td>
        </tr>
    </table >
    
    <table style="width: 90%; font-size: 16px;" align="center" border="1">
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

<table style="width: 90%; border-collapse: collapse;" align="center" border="1">
    <tr>
        <th>
        ITEM    
        </th>
        <th><h2>
            CODIGO
        </h2></th>
     
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
<tr>

    <?php 
    $contador=1;
while($row2= $requi->fetch_object()){
echo '<tr>
<td>'.$contador.'</td>
<td>'.$row2->codigo.'</td>
<td>'.$row2->grupo.'</td>
<td>'.$row2->descripcion.'</td>
<td>'.$row2->destino.'</td>
<td>'.$row2->control.'</td>
<td>'.$row2->cantidad.'</td>
<td>'.$row2->unidad.'</td>
<td>'.$row2->moneda.'</td>
<td>'.$row2->precio.'</td>
<td>'.$row2->total.'</td>
</tr>';
$contador=$contador+1;
}
     

?>

    
</tr>
<tr>
<td colspan="2">"Elaborado por: 
<br/>(Nombre, Cargo y Firma)"    
</td>
<td colspan="3"></td>
<td colspan="2">"Autorizado por:
<br/>(Nombre, Cargo y Firma)"        
</td>
<td colspan="2"></td>
<td colspan="2"></td>

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
