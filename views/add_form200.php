<?php
      include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>REKADMIN</title>
  <link rel="shortcut icon" href="../assets/favicono.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/modal.css">
</head>

<body>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var p = <? while($row= $consulta_paises->fetch_object()){echo "<option value='".$row->valor."' label='".$row->descripcion."'>".$row->descripcion."</option>";} ?>;
  
    
});
</script>
  <script>
       function obtenerCiudades1() 
       {
        var value2send = document.querySelector("#grupouno option[value='"+document.getElementById("grupo1").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value2send,
        success: function(data)
        {
          descripcion1.value='';

      $("#lista_ciudadesuno").html(data);
        }});
    }
    function obtenercampos1() 
       {
        var value2send = document.querySelector("#lista_ciudadesuno option[value='"+document.getElementById("descripcion1").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value2send,
        success: function(data)
        {var ar=data.split(' ');
          codigo1.value=ar[0];
          medida1.value=ar[1];
        }});
    }


function obtenerCiudades2() 
       {
        var value2send = document.querySelector("#grupodos option[value='"+document.getElementById("grupo2").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value2send,
        success: function(data)
        {
          descripcion2.value='';

      $("#lista_ciudadesdos").html(data);
        }});
    }
    function obtenercampos2() 
       {
        var value2send = document.querySelector("#lista_ciudadesdos option[value='"+document.getElementById("descripcion2").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value2send,
        success: function(data)
        {var ar=data.split(' ');
          codigo2.value=ar[0];
          medida2.value=ar[1];
        }});
    }

  

    function multiplicar1(){
  m1 = document.getElementById("cantidad1").value;
  m2 = document.getElementById("precio1").value;
  r = m1*m2;
  document.getElementById("total1").value = r;
}

function multiplicar2(){
  m1 = document.getElementById("cantidad2").value;
  m2 = document.getElementById("precio2").value;
  r = m1*m2;
  document.getElementById("total2").value = r;
}
function multiplicar3(){
  m1 = document.getElementById("cantidad3").value;
  m2 = document.getElementById("precio3").value;
  r = m1*m2;
  document.getElementById("total3").value = r;
}
function multiplicar4(){
  m1 = document.getElementById("cantidad4").value;
  m2 = document.getElementById("precio4").value;
  r = m1*m2;
  document.getElementById("total4").value = r;
}
function multiplicar5(){
  m1 = document.getElementById("cantidad5").value;
  m2 = document.getElementById("precio5").value;
  r = m1*m2;
  document.getElementById("total5").value = r;
}

function obtener(){
var shownVal = document.getElementById("answer").value;
var value2send = document.querySelector("#answers option[value='"+shownVal+"']").dataset.value;
document.getElementById("prueba").value = shownVal;
}
  </script>
 
  <?php
      $consulta_paises = $link->query("select id as 'valor', descripcion as 'descripcion' from paises order by descripcion");
      $consulta_ciudades = $link->query("select id as 'valor', descripcion as 'descripcion' from ciudades order by descripcion");
  ?>

  <nav class="cd-stretchy-nav">
    <a class="cd-nav-trigger" href="#0">
      MENU
      <span aria-hidden="true"></span>
    </a>

    <ul>
      <li><a href="../views/view_user.php" class="active"><span>Ver usuarios con acceso al sistema</span></a></li>
      <li><a href="../controller/logout.php"><span>Salir: <?php echo $_SESSION["apellidos"]  ?></span></a></li>
    </ul>
    <span aria-hidden="true" class="stretchy-nav-bg"></span>
  </nav>

  <div class="container">
  <form  action="../controller/add_user.php" method="post" name="form" enctype="multipart/form-data">
  <div class="frame3">
    <center>
    <div class="navi">
      <ul class="links">

        <li class="signin-active"><a class="btn" href="#">FORMULARIO 200</a></li>
      </ul>
    </div>
          <div>
          
          <table>
            <tr>
              <td colspan="2" >
             
            </td>
          <td colspan="7" valign="top" style="padding-top: 10px">
         <h2 align="center"> GERENCIA DE ADMINISTRACIÓN Y FINANZAS</h2><br>             
       <h2> FORMULARIO 200 - REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS </h2>
              <br/>
              <br/>
              
            </td>
          <td colspan="2" >
              datos
            </td>
          </tr>
            <tr>
              <td></td>
              <td></td>
              <td colspan="7">
               <H2> DATOS BÁSICOS</H2>
              <br/>
              <br/>
 
              </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">REQUIRIENTE DE LA COMPRA</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="requiriente" readonly="readonly" placeholder="Requiriente" title="requiriente" value="<?php echo $_SESSION["nombre"].' '.$_SESSION["apellido"]; ?>" >
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">EMPRESA:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="empresa" id="empresa" placeholder="Empresa" title="empresa" required>
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">AREA:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="area" readonly="readonly" id="area" placeholder="Area" title="area" value="<?php echo $_SESSION["area"];  ?>" required >
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROVEEDOR:</label></td>
              <td colspan="5">
          <input class="form-styling" type="text" id='proveedor' name="proveedor" list="prove" autocomplete="off" placeholder="Proveedor">
          <datalist name="pais" class="form-styling" id="prove">
          <option value=''>Seleccione proveedor</option>
          <?php
          $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT DISTINCT CardName FROM OPQT";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);
          echo "<option value = '".$idgrupo."'></option>";
          }
          odbc_close($conn);
          ?>
          </datalist>

          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CHEQUE A NOMBRE DE:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="cheque" id="cheque" placeholder="Cheque a nombre" title="cheque" required>
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROFORMA O COTIZACION</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proforma" id="proforma" placeholder="Proforma" title="proforma" required>
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CONDICION DE PAGO SEGUN PROFORMA</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="condicion" id="condicion" placeholder="Condicion de proforma" title="condicion" required>
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">FECHA DE REQUERIMIENTO</label></td>
              <td colspan="5"><input class="form-styling" type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>" title="fecha" readonly="readonly" required>
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROYECTO:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proyecto" id="proyecto" placeholder="Proyecto" title="proyecto" required>
          </td>
          <td></td><td></td>
            </tr>
</table>
<br/>
<br/>
<center><h2>DATOS BASICOS DEL PRODUCTO</h2></center>
<br/>
<br/>

<div class="field_wrapper">
<table border="10">            
            
          <tr><td align="center">
            <label for="fullname">ITEM</label>
          </td>
          <td align="center">
            <label for="fullname">CÓDIGO DEL ARTICULO</label>
          </td>
          <td align="center">
            <label for="fullname">GRUPO DE ARTICULO</label>
          </td>
          <td align="center">
            <label for="fullname">DESCRIPCIÓN MATERIAL</label>
          </td>
          <td align="center">
            <label for="fullname">DESTINO</label>
          </td>
          <td align="center">
            <label for="fullname">Control de Calidad</label>
          </td>
          <td align="center">
            <label for="fullname">CANTIDAD</label>
          </td>
          <td align="center">
            <label for="fullname">Unidad de Manejo(U-M)</label>
          </td>
          <td align="center">
            <label for="fullname">MONEDA</label>
          </td>
          <td align="center">
            <label for="fullname">PRECIO UNITARIO</label>
          </td>
          <td align="center">
            <label for="fullname"> TOTAL</label>
          </td>
        </tr>  









          <tr>
          <td>
          <input class="form-styling" type="numero" name="item1" id="item1" value="1" title="item1" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo1" id="codigo1" title="codigo1" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo1' name="grupo1" list="grupouno" onChange="obtenerCiudades1();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupouno">
          <option value=''>Seleccione grupo</option>
          <?php
          $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT * FROM OITB";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          ?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion1" name="descripcion1" id="descripcion1" list="lista_ciudadesuno" onChange="obtenercampos1();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadesuno" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino1" id="destino1" title="destino1" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control1" id="control1">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad1" id="cantidad1" title="cantidad1"  onChange="multiplicar1();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida1" id="medida1" title="medida1" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda1" id="moneda1" title="moneda1">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio1" id="precio1" title="precio1"  onChange="multiplicar1();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total1" id="total1" title="total1" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>




          <tr>
          <td>
          <input class="form-styling" type="numero" name="item2" id="item2" value="2" title="item2" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo2" id="codigo2"  title="codigo2" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo2' name="grupo2" list="grupodos" onChange="obtenerCiudades2();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupodos">
          <option value=''>Seleccione grupo</option>
          <?php
          $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT * FROM OITB";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          ?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion2" name="descripcion2" id="descripcion2" list="lista_ciudadesdos" onChange="obtenercampos2();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadesdos" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia12345');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 1);$desgrupo = odbc_result($result, 2);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino2" id="destino2" title="destino2">
          </td>
          <td>
          <select class="form-styling" name="control2" id="control2">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad2" id="cantidad2" title="cantidad2"  onChange="multiplicar2();">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida2" id="medida2" placeholder="" title="medida2">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda2" id="moneda2" placeholder="" title="moneda2">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio2" id="precio2" placeholder="" title="precio2"  onChange="multiplicar2();">
          </td>
          <td>
          <input class="form-styling" type="text" name="total2" id="total2" placeholder="" title="total2" value="" readonly="readonly">
          </td>
          </tr>









         

<tr>
  <td colspan="2">
   <label class="form-styling"> Elaborado por:<br/> 
(Nombre, Cargo y Firma) </label> 
</td>
  <td colspan="2"></td>
  <td colspan="2"></td>
  <td colspan="2"><label class="form-styling">Autorizado por:<br/>
(Nombre, Cargo y Firma)    </label>
</td>
  <td colspan="2"></td>
  <td colspan="3"></td>
  </tr>    
          <tr>
            <td colspan="4"></td>
            <td>
          <input class="btn-signup" type="submit" value="ENVIAR FORMULARIO">
          <div class="row cf" style="color: red"><p id="error"></p></div>
          </div>
          </td>
          </tr>
          </center>
          </table>

  </form>
  <br/>
  <br/>



<input list="answers" id="answer" onChange="obtener();">
<datalist id="answers">
  <option data-value="42" value="The answer">
  <option data-value="43" value="The answer 3">
    
</datalist>

prueba<input type="text" name="prueba" id="prueba">


</div>
  <script type="text/javascript" src='../js/jquery.min.js'></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" src='../js/angular.min.js'></script>
<script type="text/javascript" src="../js/cabecera.js"></script> 
<script type="text/javascript">
  window.onload=function(){
    var eSelect = document.getElementById('area_of');
     var optarea_of = document.getElementById('area');
     eSelect.onchange = function(){
      if (eSelect.selectedIndex===14) {
        optarea_of.type = 'text';
        optarea_of.name = 'area_of';
      }
     }
  }
</script>
    
</body>
</html>


