<?php
    
 
    //pasamos id del país
    if(!empty($_GET["codigo"])) 
    {
       $sql ="SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM WHERE ItemCode= '" . $_GET["codigo"] . "'";
              $result = odbc_exec($conn, $query);
   
              while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
       //construimos lista nue
      	   
	       echo $idgrupo->codigo;
	   
      }
    }
?>