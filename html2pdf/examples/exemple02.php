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

ob_start();
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
        <td><?php echo $_POST['requiriente']; ?></td>
    </tr>
        <tr>
        <td>EMPRESA:</td>
        <td><?php echo $_POST['empresa']; ?></td>
    </tr>

    <tr>
        <td>AREA:</td>
        <td><?php echo $_POST['area']; ?></td>
    </tr>

    <tr>
        <td>PROVEEDOR:</td>
        <td><?php echo $_POST['proveedor']; ?></td>
    </tr>

    <tr>
        <td>CHEQUE A NOMBRE DE:</td>
        <td><?php echo $_POST['cheque']; ?></td>
    </tr>

    <tr>
        <td>PROFORMA O COTIZACION APROBADA ADJUNTA:</td>
        <td><?php echo $_POST['proforma']; ?></td>
    </tr>
        <tr>
        <td>CONDICION DE PAO SEGUN PROFORMA:</td>
        <td><?php echo $_POST['condicion']; ?></td>
    </tr>
        <tr>
        <td>FECHA DE REQUERIEMIENTO:</td>
        <td><?php echo $_POST['fecha']; ?></td>
    </tr>
        <tr>
        <td>PROYECTO:</td>
        <td><?php echo $_POST['proyecto']; ?></td>
    </tr>

</table>
jkhjkjhkjhkjh
<table style="width: 90%; border-collapse: collapse;" align="center" border="1">
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
<tr>
    <td><?php echo $_POST['item1'] ?></td>
    <td><?php echo $_POST['codigo1'] ?></td>
    <td><?php echo $_POST['grupo1'] ?></td>
    <td><?php echo $_POST['descripcion1'] ?></td>
    <td><?php echo $_POST['destino1'] ?></td>
    <td><?php echo $_POST['control1'] ?></td>
    <td><?php echo $_POST['cantidad1'] ?></td>
    <td><?php echo $_POST['medida1'] ?></td>
    <td><?php echo $_POST['moneda1'] ?></td>
    <td><?php echo $_POST['precio1'] ?></td>
    <td><?php echo $_POST['total1'] ?></td>
</tr>
<tr>
    <td><?php echo $_POST['item2'] ?></td>
    <td><?php echo $_POST['codigo2'] ?></td>
    <td><?php echo $_POST['grupo2'] ?></td>
    <td><?php echo $_POST['descripcion2'] ?></td>
    <td><?php echo $_POST['destino2'] ?></td>
    <td><?php echo $_POST['control2'] ?></td>
    <td><?php echo $_POST['cantidad2'] ?></td>
    <td><?php echo $_POST['medida2'] ?></td>
    <td><?php echo $_POST['moneda2'] ?></td>
    <td><?php echo $_POST['precio2'] ?></td>
    <td><?php echo $_POST['total2'] ?></td>
</tr>
<tr>
    <td><?php echo $_POST['item3'] ?></td>
    <td><?php echo $_POST['codigo3'] ?></td>
    <td><?php echo $_POST['grupo3'] ?></td>
    <td><?php echo $_POST['descripcion3'] ?></td>
    <td><?php echo $_POST['destino3'] ?></td>
    <td><?php echo $_POST['control3'] ?></td>
    <td><?php echo $_POST['cantidad3'] ?></td>
    <td><?php echo $_POST['medida3'] ?></td>
    <td><?php echo $_POST['moneda3'] ?></td>
    <td><?php echo $_POST['precio3'] ?></td>
    <td><?php echo $_POST['total3'] ?></td>
</tr>
<tr>
    <td><?php echo $_POST['item4'] ?></td>
    <td><?php echo $_POST['codigo4'] ?></td>
    <td><?php echo $_POST['grupo1'] ?></td>
    <td><?php echo $_POST['descripcion4'] ?></td>
    <td><?php echo $_POST['destino4'] ?></td>
    <td><?php echo $_POST['control4'] ?></td>
    <td><?php echo $_POST['cantidad4'] ?></td>
    <td><?php echo $_POST['medida4'] ?></td>
    <td><?php echo $_POST['moneda4'] ?></td>
    <td><?php echo $_POST['precio4'] ?></td>
    <td><?php echo $_POST['total4'] ?></td>
</tr>
<tr>
    <td><?php echo $_POST['item5'] ?></td>
    <td><?php echo $_POST['codigo5'] ?></td>
    <td><?php echo $_POST['grupo5'] ?></td>
    <td><?php echo $_POST['descripcion5'] ?></td>
    <td><?php echo $_POST['destino5'] ?></td>
    <td><?php echo $_POST['control5'] ?></td>
    <td><?php echo $_POST['cantidad5'] ?></td>
    <td><?php echo $_POST['medida5'] ?></td>
    <td><?php echo $_POST['moneda5'] ?></td>
    <td><?php echo $_POST['precio5'] ?></td>
    <td><?php echo $_POST['total5'] ?></td>
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
    
    
    $content = ob_get_clean();

    // convert in PDF
    require_once(dirname(__FILE__).'/../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('l','CARTA','es', false, 'ISO-8859-15', array(8, 8, 8, 8));
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('exemple02.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }

