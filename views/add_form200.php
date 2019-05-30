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

  
function obtenerCiudades3() 
       {
        var value3send = document.querySelector("#grupotres option[value='"+document.getElementById("grupo3").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value3send,
        success: function(data)
        {
          descripcion3.value='';

      $("#lista_ciudadestres").html(data);
        }});
    }
    function obtenercampos3() 
       {
        var value3send = document.querySelector("#lista_ciudadestres option[value='"+document.getElementById("descripcion3").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value3send,
        success: function(data)
        {var ar=data.split(' ');
          codigo3.value=ar[0];
          medida3.value=ar[1];
        }});
    }


function obtenerCiudades4() 
       {
        var value4send = document.querySelector("#grupocuatro option[value='"+document.getElementById("grupo4").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value4send,
        success: function(data)
        {
          descripcion4.value='';

      $("#lista_ciudadescuatro").html(data);
        }});
    }
    function obtenercampos4() 
       {
        var value4send = document.querySelector("#lista_ciudadescuatro option[value='"+document.getElementById("descripcion4").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value4send,
        success: function(data)
        {var ar=data.split(' ');
          codigo4.value=ar[0];
          medida4.value=ar[1];
        }});
    }

function obtenerCiudades5() 
       {
        var value5send = document.querySelector("#grupocinco option[value='"+document.getElementById("grupo5").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value5send,
        success: function(data)
        {
          descripcion5.value='';

      $("#lista_ciudadescinco").html(data);
        }});
    }
    function obtenercampos5() 
       {
        var value5send = document.querySelector("#lista_ciudadescinco option[value='"+document.getElementById("descripcion5").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value5send,
        success: function(data)
        {var ar=data.split(' ');
          codigo5.value=ar[0];
          medida5.value=ar[1];
        }});
    }


function obtenerCiudades6() 
       {
        var value6send = document.querySelector("#gruposeis option[value='"+document.getElementById("grupo6").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value6send,
        success: function(data)
        {
          descripcion6.value='';

      $("#lista_ciudadesseis").html(data);
        }});
    }
    function obtenercampos6() 
       {
        var value6send = document.querySelector("#lista_ciudadesseis option[value='"+document.getElementById("descripcion6").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value6send,
        success: function(data)
        {var ar=data.split(' ');
          codigo6.value=ar[0];
          medida6.value=ar[1];
        }});
    }


function obtenerCiudades7() 
       {
        var value7send = document.querySelector("#gruposiete option[value='"+document.getElementById("grupo7").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value7send,
        success: function(data)
        {
          descripcion7.value='';

      $("#lista_ciudadessiete").html(data);
        }});
    }
    function obtenercampos7() 
       {
        var value7send = document.querySelector("#lista_ciudadessiete option[value='"+document.getElementById("descripcion7").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value7send,
        success: function(data)
        {var ar=data.split(' ');
          codigo7.value=ar[0];
          medida7.value=ar[1];
        }});
    }

function obtenerCiudades8() 
       {
        var value8send = document.querySelector("#grupoocho option[value='"+document.getElementById("grupo8").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value8send,
        success: function(data)
        {
          descripcion8.value='';

      $("#lista_ciudadesocho").html(data);
        }});
    }
    function obtenercampos8() 
       {
        var value8send = document.querySelector("#lista_ciudadesocho option[value='"+document.getElementById("descripcion8").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value8send,
        success: function(data)
        {var ar=data.split(' ');
          codigo8.value=ar[0];
          medida8.value=ar[1];
        }});
    }

function obtenerCiudades9() 
       {
        var value9send = document.querySelector("#gruponueve option[value='"+document.getElementById("grupo9").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value9send,
        success: function(data)
        {
          descripcion9.value='';

      $("#lista_ciudadesnueve").html(data);
        }});
    }
    function obtenercampos9() 
       {
        var value9send = document.querySelector("#lista_ciudadesnueve option[value='"+document.getElementById("descripcion9").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value9send,
        success: function(data)
        {var ar=data.split(' ');
          codigo9.value=ar[0];
          medida9.value=ar[1];
        }});
    }

function obtenerCiudades10() 
       {
        var value10send = document.querySelector("#grupodiez option[value='"+document.getElementById("grupo10").value+"']").dataset.value;
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+value10send,
        success: function(data)
        {
          descripcion10.value='';

      $("#lista_ciudadesdiez").html(data);
        }});
    }
    function obtenercampos10() 
       {
        var value10send = document.querySelector("#lista_ciudadesdiez option[value='"+document.getElementById("descripcion10").value+"']").dataset.value;
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+value10send,
        success: function(data)
        {var ar=data.split(' ');
          codigo10.value=ar[0];
          medida10.value=ar[1];
        }});
    }




    function multiplicar1(){
  m1 = document.getElementById("cantidad1").value;
  m2 = document.getElementById("precio1").value;
  r = m1*m2;
  document.getElementById("total1").value = r;
 document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;

}

function multiplicar2(){
  m1 = document.getElementById("cantidad2").value;
  m2 = document.getElementById("precio2").value;
  r = m1*m2;
  document.getElementById("total2").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar3(){
  m1 = document.getElementById("cantidad3").value;
  m2 = document.getElementById("precio3").value;
  r = m1*m2;
  document.getElementById("total3").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar4(){
  m1 = document.getElementById("cantidad4").value;
  m2 = document.getElementById("precio4").value;
  r = m1*m2;
  document.getElementById("total4").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar5(){
  m1 = document.getElementById("cantidad5").value;
  m2 = document.getElementById("precio5").value;
  r = m1*m2;
  document.getElementById("total5").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar5(){
  m1 = document.getElementById("cantidad5").value;
  m2 = document.getElementById("precio5").value;
  r = m1*m2;
  document.getElementById("total5").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar6(){
  m1 = document.getElementById("cantidad6").value;
  m2 = document.getElementById("precio6").value;
  r = m1*m2;
  document.getElementById("total6").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar7(){
  m1 = document.getElementById("cantidad7").value;
  m2 = document.getElementById("precio7").value;
  r = m1*m2;
  document.getElementById("total7").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar8(){
  m1 = document.getElementById("cantidad8").value;
  m2 = document.getElementById("precio8").value;
  r = m1*m2;
  document.getElementById("total8").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar9(){
  m1 = document.getElementById("cantidad9").value;
  m2 = document.getElementById("precio9").value;
  r = m1*m2;
  document.getElementById("total9").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
}
function multiplicar10(){
  m1 = document.getElementById("cantidad10").value;
  m2 = document.getElementById("precio10").value;
  r = m1*m2;
  document.getElementById("total10").value = r;
  document.getElementById("totalt").value = parseInt(document.getElementById("totalt").value) + r;
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
      <li><a href="../views/view_form200.php" class="active"><span>Ver formularios</span></a></li>
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
          <input class="form-styling" type="text" id='proveedor' name="proveedor" list="prove" autocomplete="off" placeholder="Proveedor" >
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
          <input class="form-styling" type="hidden" name="codigo1" id="codigo1" title="codigo1" readonly="readonly">
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
          <input class="form-styling" type="hidden" name="codigo2" id="codigo2"  title="codigo2" readonly="readonly">
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
          <td>
          <input class="form-styling" type="numero" name="item3" id="item3" value="3" title="item3" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo3" id="codigo3" title="codigo3" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo3' name="grupo3" list="grupotres" onChange="obtenerCiudades3();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupotres">
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
          <input class="form-styling" type="text" id="descripcion3" name="descripcion3" id="descripcion3" list="lista_ciudadestres" onChange="obtenercampos3();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadestres" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia33345');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 3);$desgrupo = odbc_result($result, 3);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino3" id="destino3" title="destino3" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control3" id="control3">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad3" id="cantidad3" title="cantidad3"  onChange="multiplicar3();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida3" id="medida3" title="medida3" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda3" id="moneda3" title="moneda3">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio3" id="precio3" title="precio3"  onChange="multiplicar3();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total3" id="total3" title="total3" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>



          <tr>
          <td>
          <input class="form-styling" type="numero" name="item4" id="item4" value="4" title="item4" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo4" id="codigo4" title="codigo4" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo4' name="grupo4" list="grupocuatro" onChange="obtenerCiudades4();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupocuatro">
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
          <input class="form-styling" type="text" id="descripcion4" name="descripcion4" id="descripcion4" list="lista_ciudadescuatro" onChange="obtenercampos4();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadescuatro" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia44445');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 4);$desgrupo = odbc_result($result, 4);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino4" id="destino4" title="destino4" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control4" id="control4">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad4" id="cantidad4" title="cantidad4"  onChange="multiplicar4();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida4" id="medida4" title="medida4" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda4" id="moneda4" title="moneda4">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio4" id="precio4" title="precio4"  onChange="multiplicar4();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total4" id="total4" title="total4" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>





          <tr>
          <td>
          <input class="form-styling" type="numero" name="item5" id="item5" value="5" title="item5" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo5" id="codigo5" title="codigo5" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo5' name="grupo5" list="grupocinco" onChange="obtenerCiudades5();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupocinco">
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
          <input class="form-styling" type="text" id="descripcion5" name="descripcion5" id="descripcion5" list="lista_ciudadescinco" onChange="obtenercampos5();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadescinco" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia55555');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 5);$desgrupo = odbc_result($result, 5);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino5" id="destino5" title="destino5" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control5" id="control5">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad5" id="cantidad5" title="cantidad5"  onChange="multiplicar5();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida5" id="medida5" title="medida5" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda5" id="moneda5" title="moneda5">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio5" id="precio5" title="precio5"  onChange="multiplicar5();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total5" id="total5" title="total5" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>


          <tr>
          <td>
          <input class="form-styling" type="numero" name="item6" id="item6" value="6" title="item6" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo6" id="codigo6" title="codigo6" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo6' name="grupo6" list="gruposeis" onChange="obtenerCiudades6();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="gruposeis">
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
          <input class="form-styling" type="text" id="descripcion6" name="descripcion6" id="descripcion6" list="lista_ciudadesseis" onChange="obtenercampos6();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadesseis" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia66666');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 6);$desgrupo = odbc_result($result, 6);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino6" id="destino6" title="destino6" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control6" id="control6">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad6" id="cantidad6" title="cantidad6"  onChange="multiplicar6();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida6" id="medida6" title="medida6" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda6" id="moneda6" title="moneda6">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio6" id="precio6" title="precio6"  onChange="multiplicar6();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total6" id="total6" title="total6" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>



          <tr>
          <td>
          <input class="form-styling" type="numero" name="item7" id="item7" value="7" title="item7" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo7" id="codigo7" title="codigo7" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo7' name="grupo7" list="gruposiete" onChange="obtenerCiudades7();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="gruposiete">
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
          <input class="form-styling" type="text" id="descripcion7" name="descripcion7" id="descripcion7" list="lista_ciudadessiete" onChange="obtenercampos7();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadessiete" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia77777');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 7);$desgrupo = odbc_result($result, 7);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino7" id="destino7" title="destino7" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control7" id="control7">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad7" id="cantidad7" title="cantidad7"  onChange="multiplicar7();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida7" id="medida7" title="medida7" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda7" id="moneda7" title="moneda7">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio7" id="precio7" title="precio7"  onChange="multiplicar7();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total7" id="total7" title="total7" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>


          <tr>
          <td>
          <input class="form-styling" type="numero" name="item8" id="item8" value="8" title="item8" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo8" id="codigo8" title="codigo8" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo8' name="grupo8" list="grupoocho" onChange="obtenerCiudades8();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupoocho">
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
          <input class="form-styling" type="text" id="descripcion8" name="descripcion8" id="descripcion8" list="lista_ciudadesocho" onChange="obtenercampos8();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadesocho" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia88888');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 8);$desgrupo = odbc_result($result, 8);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino8" id="destino8" title="destino8" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control8" id="control8">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad8" id="cantidad8" title="cantidad8"  onChange="multiplicar8();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida8" id="medida8" title="medida8" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda8" id="moneda8" title="moneda8">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio8" id="precio8" title="precio8"  onChange="multiplicar8();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total8" id="total8" title="total8" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>



          <tr>
          <td>
          <input class="form-styling" type="numero" name="item9" id="item9" value="9" title="item9" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo9" id="codigo9" title="codigo9" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo9' name="grupo9" list="gruponueve" onChange="obtenerCiudades9();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="gruponueve">
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
          <input class="form-styling" type="text" id="descripcion9" name="descripcion9" id="descripcion9" list="lista_ciudadesnueve" onChange="obtenercampos9();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadesnueve" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia99999');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 9);$desgrupo = odbc_result($result, 9);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino9" id="destino9" title="destino9" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control9" id="control9">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad9" id="cantidad9" title="cantidad9"  onChange="multiplicar9();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida9" id="medida9" title="medida9" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda9" id="moneda9" title="moneda9">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio9" id="precio9" title="precio9"  onChange="multiplicar9();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total9" id="total9" title="total9" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>


          <tr>
          <td>
          <input class="form-styling" type="numero" name="item10" id="item10" value="10" title="item10" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo10" id="codigo10" title="codigo10" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo10' name="grupo10" list="grupodiez" onChange="obtenerCiudades10();" autocomplete="off">
          <datalist name="pais" class="form-styling" id="grupodiez">
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
          <input class="form-styling" type="text" id="descripcion10" name="descripcion10" id="descripcion10" list="lista_ciudadesdiez" onChange="obtenercampos10();" autocomplete="off">
          <datalist name="ciudad" id="lista_ciudadesdiez" class="form-styling">
          <option value='Seleccione material' data-value="0"></option>
          <?php
          /* $conn = odbc_connect("Driver=FreeTDS;DSN=test;Database=MOLINO_ANDINO", 'Reportes', 'Bolivia1010101010');
          $query = "SELECT ItemCode, ItemName, ItmsGrpCod ,InvntItem FROM OITM";
          $result = odbc_exec($conn, $query);
          while(odbc_fetch_row($result)){
          $idgrupo = odbc_result($result, 10);$desgrupo = odbc_result($result, 10);
          echo "<option data-value='".$idgrupo."' value = '".$desgrupo."'></option>";
          }
          odbc_close($conn);
          */?>
          </datalist>
          </td>
          <td>
          <input class="form-styling" type="text" name="destino10" id="destino10" title="destino10" autocomplete="off">
          </td>
          <td>
          <select class="form-styling" name="control10" id="control10">
            <option></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad10" id="cantidad10" title="cantidad10"  onChange="multiplicar10();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida10" id="medida10" title="medida10" readonly="readonly">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda10" id="moneda10" title="moneda10">
            <option></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio10" id="precio10" title="precio10"  onChange="multiplicar10();" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="total10" id="total10" title="total10" value="" readonly="readonly" onChange="sumart();">
          </td>
          </tr>

<tr>
  <td colspan="10"><label>TOTAL</label></td>
  <td><input class="form-styling" type="text" name="totalt" id="totalt" title="totalt" value="0" readonly="readonly"></td>
</tr>
         

<tr>
  <td colspan="11" align="center">
   <label for="fullname">OBSERVACIONES Y RECOMENDACIONES</label>
</td>
  </tr>
  <tr>
  <td colspan="11">
   <input class="form-styling" type="text" name="obs" id="obs" title="obs" value=""  >
</td>
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


