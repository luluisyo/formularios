<?php
    include 'config.php';
 
    //pasamos id del país
    if(!empty($_POST["id_pais"])) 
    {
         $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM WHERE ItmsGrpCod = '" . $_POST["id_pais"] . "'";

          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);

       //construimos lista nueva dependiente
      ?>
      <option value="">Seleccionar Ciudad</option>
      <?php
 
              while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
	   ?>
	      <option value="<?php echo $idgrupo; ?>" data-value="<?php echo $desgrupo; ?>"></option>
	   <?php
      }
    }
?>