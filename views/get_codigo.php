<?php
    //pasamos id del país
    if(!empty($_GET["codigo"])) 
    {
               $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod, InvntryUom FROM OITM WHERE ItemCode= '" . $_GET["codigo"] . "';";
              
              $result = odbc_exec($conn, $query);
   
              while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1); $desgrupo = odbc_result($result, 2);
       //construimos lista nue
      	   
           print $idgrupo.' '.$desgrupo;   
      }
    }
?>