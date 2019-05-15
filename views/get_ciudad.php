<?php

    //pasamos id del país
    if(!empty($_POST["id_pais"])) 
    {
         $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM WHERE ItmsGrpCod = 108";
print $query;
}    
?>
