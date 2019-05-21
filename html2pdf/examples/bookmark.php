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

<page backtop="14mm" backbottom="14mm" backleft="10mm" backright="10mm" style="font-size: 12pt">
    <page_header>
        <table class="page_header">
            <tr>
                <td>
                
                </td>
                <td>
                   GERENCIA DE ADMINISTRACIÓN Y FINANZAS<br/>
                   FORMULARIO 200 - REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS                           
                             
                </td>
                <td>
                    
                </td>
                
            </tr>
        </table>
    </page_header>
    <page_footer>
        <table class="page_footer">
            <tr>
                <td style="width: 100%; text-align: right">
                    page [[page_cu]]/[[page_nb]]
                </td>
            </tr>
        </table>
    </page_footer>
    <bookmark title="Sommaire" level="0" ></bookmark>
</page>
<page pageset="old">
    <bookmark title="Chapitre 1" level="0" ></bookmark><h1>Chapitre 1</h1>
    <div class="niveau">
        Contenu du chapitre 1
    </div>
</page>
<page pageset="old">
    <bookmark title="Chapitre 2" level="0" ></bookmark><h1>Chapitre 2</h1>
    <div class="niveau">
        intro au chapitre 2
        <bookmark title="Chapitre 2.1" level="1" ></bookmark><h2>Chapitre 2.1</h2>
        <div class="niveau">
            Contenu du chapitre 2.1
        </div>
        <bookmark title="Chapitre 2.2" level="1" ></bookmark><h2>Chapitre 2.2</h2>
        <div class="niveau">
            Contenu du chapitre 2.2
        </div>
        <bookmark title="Chapitre 2.3" level="1" ></bookmark><h2>Chapitre 2.3</h2>
        <div class="niveau">
            Contenu du chapitre 2.3
        </div>
    </div>
</page>
<page pageset="old">
    <bookmark title="Chapitre 3" level="0" ></bookmark><h1>Chapitre 3</h1>
    <div class="niveau">
        intro au chapitre 3
        <bookmark title="Chapitre 3.1" level="1" ></bookmark><h2>Chapitre 3.1</h2>
        <div class="niveau">
            Contenu du chapitre 3.1
        </div>
        <bookmark title="Chapitre 3.2" level="1" ></bookmark><h2>Chapitre 3.2</h2>
        <div class="niveau">
            intro au chapitre 3.2
            <bookmark title="Chapitre 3.2.1" level="2" ></bookmark><h3>Chapitre 3.2.1</h3>
            <div class="niveau">
                Contenu du chapitre 3.2.1
            </div>
            <bookmark title="Chapitre 3.2.2" level="2" ></bookmark><h3>Chapitre 3.2.2</h3>
            <div class="niveau">
                Contenu du chapitre 3.2.2
            </div>
        </div>
    </div>
</page>
<?php
    $content = ob_get_clean();

    require_once(dirname(__FILE__).'../../html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'fr', true, 'UTF-8', 0);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->createIndex('Sommaire', 25, 12, false, true, 1);
        $html2pdf->Output('bookmark.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
    ?>
