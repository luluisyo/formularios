<?php
    include 'config.php';
 
    //pasamos id del país
    if(!empty($_GET["codigo"])) 
    {
       $sql ="SELECT id, descripcion, codigo FROM ciudades WHERE id = '" . $_GET["codigo"] . "'";
       $consulta_ciudades = $link->query($sql);
 
       //construimos lista nue
      while($ciudad = $consulta_ciudades->fetch_object())
      {
	   
	       echo $ciudad->codigo;
	   
      }
    }
?>