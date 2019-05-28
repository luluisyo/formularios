<?php
      include 'config.php';
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}

extract($_GET);
          require("../controller/conexion.php");
          $sql="select * from usuario where ci=$id";
          $ressql=mysqli_query($con,$sql);
        


          while ($row=mysqli_fetch_row($ressql)) {
            $ci=$row[0];
            $nombre=$row[1];
            $apellido=$row[2];
            $sexo=$row[3];
            $email=$row[4];
            $usuario=$row[5];
            $password=$row[6];
            $cargo=$row[7];
            $area=$row[8];
            $tipo=$row[9];
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

  <nav class="cd-stretchy-nav">
    <a class="cd-nav-trigger" href="#0">
      MENU
      <span aria-hidden="true"></span>
    </a>

    <ul>
      <li><a href="../views/view_user.php" class="active"><span>Ver usuarios con acceso al sistema</span></a></li>
      <li><a href="../controller/logout.php"><span>Salir: <?php echo $_SESSION["nombre"] ?></span></a></li>
    </ul>
    <span aria-hidden="true" class="stretchy-nav-bg"></span>
  </nav>

  <div class="container">
  <form  action="../controller/update_user2.php" method="post" name="form" enctype="multipart/form-data">
  <div class="frame3" style="width: 400px;">
    <center>
    <div class="navi">
      <ul class="links">


        <li class="signin-active"><a class="btn" href="#">NUEVO USUARIO</a></li>
      </ul>
    </div>
				  <div>
          
          <table>
            
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CEDULA DE IDENTIDAD</label></td>
              <td colspan="5"><input class="form-styling" type="number" name="ci"  placeholder="Cedula de Identidad" title="ci" require value="<?php echo $ci ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">NOMBRES</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="nombre" id="nombre" placeholder="Nombres" title="nombre" required value="<?php echo $nombre ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">APELLIDOS</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="apellido" id="apellido" placeholder="Aperllidos" title="apellido" required value="<?php echo $apellido ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">SEXO</label></td>
              <td colspan="5"><select class="form-styling" name="sexo" value="<?php echo $sexo ?>">
                <option value="M">MASCULINO</option>
                <option value="F">FEMENINO</option>
              </select>
            </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">EMAIL</label></td>
              <td colspan="5"><input class="form-styling" type="email" name="email" id="email" placeholder="Email" title="email" required value="<?php echo $email ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">NOMBRE USUARIO</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario" title="usuario" required value="<?php echo $usuario ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PASSWORD</label></td>
              <td colspan="5"><input class="form-styling" type="password" name="password" id="password" placeholder="Contraseña" title="password" required value="<?php echo $password ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CARGO</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="cargo" id="cargo"  title="cargo" required placeholder="Cargo" value="<?php echo $cargo ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">AREA</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="area" id="area" placeholder="Area" title="area" required value="<?php echo $area ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">TIPO</label></td>
              <td colspan="5"><select class="form-styling" name="tipo" value="<?php echo $tipo ?>">
                <option value="r">REGULAR</option>
                <option value="m">ALMACEN</option>
                <option value="a">ADMINISTRADOR</option>
              </select>
            </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="7">
          <input class="btn-signup" type="submit" value="ENVIAR FORMULARIO">
          <div class="row cf" style="color: red"><p id="error"></p></div>
            </td>
          <td></td><td></td>
            </tr>
</table>
</div>
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


