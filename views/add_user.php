<?php
      include 'config.php';
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
       function obtenerCiudades(val) 
       {
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+val,
        success: function(data)
        {
          descripcion1.value='';
      $("#lista_ciudades").html(data);
        }});
    }
    function obtenercampos(val) 
       {
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+val,
        success: function(data)
        {codigo1.value=data;

        }});
    }


    function obtenerCiudades2(val) 
       {
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+val,
        success: function(data)
        {
          descripcion2.value='';
      $("#lista_ciudades2").html(data);
        }});
    }
    function obtenercampos2(val) 
       {
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+val,
        success: function(data)
        {codigo2.value=data;

        }});
    }


    function obtenerCiudades3(val) 
       {
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+val,
        success: function(data)
        {
          descripcion3.value='';
      $("#lista_ciudades3").html(data);
        }});
    }
    function obtenercampos3(val) 
       {
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+val,
        success: function(data)
        {codigo3.value=data;

        }});
    }

function obtenerCiudades4(val) 
       {
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+val,
        success: function(data)
        {
          descripcion4.value='';
      $("#lista_ciudades4").html(data);
        }});
    }
    function obtenercampos4(val) 
       {
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+val,
        success: function(data)
        {codigo4.value=data;

        }});
    }

    function obtenerCiudades5(val) 
       {
    $.ajax
    ({
        type: "POST",
        url: "get_ciudad.php",
        data:'id_pais='+val,
        success: function(data)
        {
          descripcion5.value='';
      $("#lista_ciudades5").html(data);
        }});
    }
    function obtenercampos5(val) 
       {
    $.ajax
    ({
        type: "GET",
        url: "get_codigo.php",
        data:'codigo='+val,
        success: function(data)
        {codigo5.value=data;

        }});
    }

  </script>
 
  <?php
      $consulta_paises   = $link->query("select id as 'valor', descripcion as 'descripcion' from paises order by descripcion");
      $consulta_ciudades = $link->query("select id as 'valor', descripcion as 'descripcion' from ciudades order by descripcion");
  ?>

  <nav class="cd-stretchy-nav">
    <a class="cd-nav-trigger" href="#0">
      MENU
      <span aria-hidden="true"></span>
    </a>

    <ul>
      <li><a href="../views/view_user.php" class="active"><span>Ver usuarios con acceso al sistema</span></a></li>
      <li><a href="../controller/logout.php"><span>Salir: <?php echo $_SESSION["nombre"]  ?></span></a></li>
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
              <td colspan="5"><input class="form-styling" type="text" name="requiriente"  placeholder="Requiriente" title="requiriente">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">EMPRESA:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="empresa" id="empresa" placeholder="Empresa" title="empresa">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">AREA:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="area" id="area" placeholder="Area" title="area">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROVEEDOR:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proveedor" id="proveedor" placeholder="Proveedor" title="proveedor">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CHEQUE A NOMBRE DE:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="cheque" id="cheque" placeholder="Cheque a nombre" title="cheque">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROFORMA O COTIZACION</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proforma" id="proforma" placeholder="Proforma" title="proforma">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CONDICION DE PAGO SEGUN PROFORMA</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="condicion" id="condicion" placeholder="Condicion de proforma" title="condicion">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">FECHA DE REQUERIMIENTO</label></td>
              <td colspan="5"><input class="form-styling" type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>" title="fecha" readonly="readonly">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROYECTO:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proyecto" id="proyecto" placeholder="Proyecto" title="proyecto">
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
          <input class="form-styling" type="nnumero" name="item1" id="item1" value="1" title="item1" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo1" id="codigo1" list="lista_codigo" placeholder="" title="codigo1" readonly="readonly">
          </td>
          
          <td>
          <input class="form-styling" type="text" name="grupo1" list="grupo" onChange="obtenerCiudades(this.value);">
          <datalist name="pais" class="form-styling" id="grupo" onChange="obtenerCiudades(this.value);">
          <option value=''>Seleccione grupo</option>
          <?php   
          while($row= $consulta_paises->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>

          <td>
          <input class="form-styling" type="text" name="descripcion1" id="descripcion1" list="lista_ciudades" onChange="obtenercampos(this.value);">
          <datalist name="ciudad" id="lista_ciudades" class="form-styling">
          <option value=''>Seleccione material</option>
          <?php
          while($row= $consulta_ciudades->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>
          
          <td>
          <input class="form-styling" type="text" name="destino1" id="destino1" placeholder="" title="destino1">
          </td>
          <td>
          <select class="form-styling" name="control1" id="control1">
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="text" name="cantidad1" id="cantidad1" placeholder="" title="cantidad1">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida1" id="medida1" placeholder="" title="medida1">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda1" id="moneda1" placeholder="" title="moneda1">
            <option>Bolivianos</option><option>Dolares</option>
          </td>
          <td>
          <input class="form-styling" type="text" name="precio1" id="precio1" placeholder="" title="precio1">
          </td>
          <td>
          <input class="form-styling" type="text" name="total1" id="total1" placeholder="" title="total1" value="">
          </td>
          </tr>


   <tr>
          <td>
          <input class="form-styling" type="nnumero" name="item2" id="item2" value="2" title="item2" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo2" id="codigo2" list="lista_codigo" placeholder="" title="codigo2" readonly="readonly">
          </td>
          
          <td>
          <input class="form-styling" type="text" name="grupo2" list="grupo" onChange="obtenerCiudades2(this.value);">
          <datalist name="pais" class="form-styling" id="grupo" onChange="obtenerCiudades2(this.value);">
          <option value=''>Seleccione grupo</option>
          <?php   
          while($row= $consulta_paises->fetch_object())
          {echo "<option value='".$row->valor."' label='".$row->descripcion."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>

          <td>
          <input class="form-styling" type="text" name="descripcion2" id="descripcion2" list="lista_ciudades2" onChange="obtenercampos2(this.value);">
          <datalist name="ciudad" id="lista_ciudades2" class="form-styling">
          <option value=''>Seleccione material</option>
          <?php
          while($row= $consulta_ciudades->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>
          
          <td>
          <input class="form-styling" type="text" name="destino2" id="destino2" placeholder="" title="destino2">
          </td>
          <td>
          <select class="form-styling" name="control2" id="control2">
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="text" name="cantidad2" id="cantidad2" placeholder="" title="cantidad2">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida2" id="medida2" placeholder="" title="medida2">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda2" id="moneda2" placeholder="" title="moneda2">
            <option>Bolivianos</option><option>Dolares</option>
          </td>
          <td>
          <input class="form-styling" type="text" name="precio2" id="precio2" placeholder="" title="precio2">
          </td>
          <td>
          <input class="form-styling" type="text" name="total2" id="total2" placeholder="" title="total2">
          </td>
          </tr>




<tr>
          <td>
          <input class="form-styling" type="nnumero" name="item3" id="item3" value="3" title="item3" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo3" id="codigo3" list="lista_codigo" placeholder="" title="codigo3" readonly="readonly">
          </td>
          
          <td>
          <input class="form-styling" type="text" name="grupo3" list="grupo" onChange="obtenerCiudades3(this.value);">
          <datalist name="pais" class="form-styling" id="grupo" onChange="obtenerCiudades3(this.value);">
          <option value=''>Seleccione grupo</option>
          <?php   
          while($row= $consulta_paises->fetch_object())
          {echo "<option value='".$row->valor."' label='".$row->descripcion."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>

          <td>
          <input class="form-styling" type="text" name="descripcion3" id="descripcion3" list="lista_ciudades3" onChange="obtenercampos3(this.value);">
          <datalist name="ciudad" id="lista_ciudades3" class="form-styling">
          <option value=''>Seleccione material</option>
          <?php
          while($row= $consulta_ciudades->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>
          
          <td>
          <input class="form-styling" type="text" name="destino3" id="destino3" placeholder="" title="destino3">
          </td>
          <td>
          <select class="form-styling" name="control3" id="control3">
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="text" name="cantidad3" id="cantidad3" placeholder="" title="cantidad3">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida3" id="medida3" placeholder="" title="medida3">
          </td>
          <td>
          <input class="form-styling" type="text" name="moneda3" id="moneda3" placeholder="" title="moneda3">
          </td>
          <td>
          <input class="form-styling" type="text" name="precio3" id="precio3" placeholder="" title="precio3">
          </td>
          <td>
          <input class="form-styling" type="text" name="total3" id="total3" placeholder="" title="total3">
          </td>
          </tr>



           <tr>
          <td>
          <input class="form-styling" type="nnumero" name="item4" id="item4" value="4" title="item4" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo4" id="codigo4" list="lista_codigo" placeholder="" title="codigo4" readonly="readonly">
          </td>
          
          <td>
          <input class="form-styling" type="text" name="grupo4" list="grupo" onChange="obtenerCiudades4(this.value);">
          <datalist name="pais" class="form-styling" id="grupo" onChange="obtenerCiudades4(this.value);">
          <option value=''>Seleccione grupo</option>
          <?php   
          while($row= $consulta_paises->fetch_object())
          {echo "<option value='".$row->valor."' label='".$row->descripcion."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>

          <td>
          <input class="form-styling" type="text" name="descripcion4" id="descripcion4" list="lista_ciudades4" onChange="obtenercampos4(this.value);">
          <datalist name="ciudad" id="lista_ciudades4" class="form-styling">
          <option value=''>Seleccione material</option>
          <?php
          while($row= $consulta_ciudades->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>
          
          <td>
          <input class="form-styling" type="text" name="destino4" id="destino4" placeholder="" title="destino4">
          </td>
          <td>
          <select class="form-styling" name="control4" id="control4">
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="text" name="cantidad4" id="cantidad4" placeholder="" title="cantidad4">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida4" id="medida4" placeholder="" title="medida4">
          </td>
          <td>
          <input class="form-styling" type="text" name="moneda4" id="moneda4" placeholder="" title="moneda4">
          </td>
          <td>
          <input class="form-styling" type="text" name="precio4" id="precio4" placeholder="" title="precio4">
          </td>
          <td>
          <input class="form-styling" type="text" name="total4" id="total4" placeholder="" title="total4">
          </td>
          </tr>



<tr>
          <td>
          <input class="form-styling" type="nnumero" name="item5" id="item5" value="5" title="item5" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo5" id="codigo5" list="lista_codigo" placeholder="" title="codigo5" readonly="readonly">
          </td>
          
          <td>
          <input class="form-styling" type="text" name="grupo5" list="grupo" onChange="obtenerCiudades5(this.value);">
          <datalist name="pais" class="form-styling" id="grupo" onChange="obtenerCiudades5(this.value);">
          <option value=''>Seleccione grupo</option>
          <?php   
          while($row= $consulta_paises->fetch_object())
          {echo "<option value='".$row->valor."' label='".$row->descripcion."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>

          <td>
          <input class="form-styling" type="text" name="descripcion5" id="descripcion5" list="lista_ciudades5" onChange="obtenercampos5(this.value);">
          <datalist name="ciudad" id="lista_ciudades5" class="form-styling">
          <option value=''>Seleccione material</option>
          <?php
          while($row= $consulta_ciudades->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>
          
          <td>
          <input class="form-styling" type="text" name="destino5" id="destino5" placeholder="" title="destino5">
          </td>
          <td>
          <select class="form-styling" name="control5" id="control5">
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="text" name="cantidad5" id="cantidad5" placeholder="" title="cantidad5">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida5" id="medida5" placeholder="" title="medida5">
          </td>
          <td>
          <input class="form-styling" type="text" name="moneda5" id="moneda5" placeholder="" title="moneda5">
          </td>
          <td>
          <input class="form-styling" type="text" name="precio5" id="precio5" placeholder="" title="precio5">
          </td>
          <td>
          <input class="form-styling" type="text" name="total5" id="total5" placeholder="" title="total5">
          </td>
          </tr>          










          <a href="javascript:void(0);" class="add_button" title="Add field">add fila</a>
  
          </table>

          </div>
          
          <input class="btn-signup" type="submit" value="ENVIAR FORMULARIO">
          <div class="row cf" style="color: red"><p id="error"></p></div>
          </div>
          </center>
          </div>
  </form>
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
