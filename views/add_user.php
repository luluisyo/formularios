<?php
session_start();
if(isset($_SESSION["user_id"])){
    if($_SESSION["user_id"]!=0){
        print "<script>alert(\"No esta autorizado para ver esta página, consulte con el administrador\");window.location='../index.php';</script>";
    }
}
else{
  print "<script>alert(\"Acceso denegado, debe identificarse\");window.location='../index.php';</script>";
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
          <label for="fullname">Carnet de identidad</label>
          <input class="form-styling" type="number" name="ci" id="ci" placeholder="Carnet de identidad" title="Carnet de identidad" required>
          <label for="fullname">Nombres</label>

          <input class="form-styling" type="date" name="nombre" id="nombres" value="<?php echo date("Y-m-d");?>" title="Nombres" readonly="readonly">

          <label for="fullname">Apellidos</label>
          <input class="form-styling" type="text" name="apellido" id="apellidos" placeholder="Apellidos" title="Apellidos">
          <label for="fullname">Género</label>
          <select class="form-styling" name="sexo" id="sexo" title="Genero" required>
            <option value="" selected disabled>Elija el género</option>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
          </select>
          <table>
            <tr>
              <td colspan="2" >
             
            </td>
          <td colspan="7" valign="top" style="padding-top: 10px">
             <h3 align="center"> GERENCIA DE ADMINISTRACIÓN Y FINANZAS</h3><br>             
              FORMULARIO 200 - REQUERIMIENTO DE COMPRA y/o CONTRATACION DE SERVICIOS            
            </td>
          <td colspan="2" >
              datos
            </td>
          </tr>
            <tr>
              <td></td>
              <td></td>
              <td colspan="7">
                DATOS BÁSICOS
              </td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">REQUIRIENTE DE LA COMPRA</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="requiriente" id="requiriente" placeholder="Requiriente" title="requiriente">
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

          <tr><td>
          <input class="form-styling" type="nnumero" name="item1" id="item1" value="1" title="item1" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo1" id="codigo1" placeholder="" title="codigo1">
          </td>
          <td>
          <input class="form-styling" type="text" name="grupo1" id="grupo1" placeholder="" title="grupo1">
          </td>
          <td>
          <input class="form-styling" type="text" name="descripcion1" id="descripcion1" placeholder="" title="descripcion1">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino1" id="destino1" placeholder="" title="destino1">
          </td>
          <td>
          <input class="form-styling" type="text" name="control1" id="control1" placeholder="" title="control1">
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
          <input class="form-styling" type="text" name="preunit1" id="preunit1" placeholder="" title="preunit1">
          </td>
          <td>
          <input class="form-styling" type="text" name="total1" id="total1" placeholder="" title="total1">
          </td>
        </tr>  




          </table>
          <label for="fullname">Correo Electrónico</label>
          <input class="form-styling" type="email" name="email" id="email" placeholder="Correo electronico" title="Correo Electronico">
          <label for="fullname">Nombre de usuario</label>
          <input class="form-styling" type="text" name="usuario" id="usuario" placeholder="Nombre de usuario" title="Nombre de usuario">
          <label for="fullname">Contraseña</label>
          <input class="form-styling" type="password" name="password" id="pass2" placeholder="Introduzca contraseña" required title="Contraseña">
          <input class="btn-signup" type="submit" value="Añadir usuario">
          <div class="row cf" style="color: red"><p id="error"></p></div>
          </div>
          </center>
          </div>
  </form>
</div>




  <script type="text/javascript" src='../js/jquery.min.js'></script>
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
