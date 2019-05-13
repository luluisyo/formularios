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
    
    var fieldHTML = '<div><tr><td><input type="text" name="field_name[]" value=""/></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
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
      $("#lista_ciudades").html(data);
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
          <input class="form-styling" type="text" name="codigo1" id="codigo1" placeholder="" title="codigo1">
          </td>
          
          <td>
          <input class="form-styling" type="text" name="grupo1" list="grupo" onChange="obtenerCiudades(this.value);" value="asda">
          <datalist name="pais" class="form-styling" id="grupo" onChange="obtenerCiudades(this.value);">
          <option value=''>Seleccione grupo</option>
          <?php   
          while($row= $consulta_paises->fetch_object())
          {echo "<option value='".$row->valor."'>".$row->descripcion."</option>";}
          ?>
          </datalist>
          </td>

          <td>
          <input class="form-styling" type="text" name="descripcion1" list="lista_ciudades" onChange="obtenercampos(this.value);">
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
          <input class="form-styling" type="text" name="moneda1" id="moneda1" placeholder="" title="moneda1">
          </td>
          <td>
          <input class="form-styling" type="text" name="precio1" id="precio1" placeholder="" title="precio1">
          </td>
          <td>
          <input class="form-styling" type="text" name="total1" id="total1" placeholder="" title="total1">
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
