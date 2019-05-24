<?php
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Actualizar proveedor</title>
  <link rel="shortcut icon" href="../assets/favicono.ico">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<script>
  
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

<nav class="cd-stretchy-nav">
        <a class="cd-nav-trigger" href="#0">
            <span aria-hidden="true"></span>
        </a>

        <ul>
          <li><a href="../views/view_proveedor.php"><span><font color="#5484FF">Volver a Proveedores</font></span></a></li>
          <li><a href="../views/principal.php"><span><font color="#5484FF">Ver requerimientos</font></span></a></li>
            <li><a href="../views/add_request.php" class="active"><span><font color="#5484FF">Nuevo requerimiento</font></span></a></li>
            
            <li><a href="../views/update_user.php"><span><font color="#5484FF">Cambiar contraseña</font></span></a></li>
            <li><a href="../controller/logout.php"><span><font color="#5484FF">Salir: <?php echo $_SESSION["nombre"]  ?></font></span></a></li>
        </ul>
        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>
<div class="container">
  <form  action="../controller/update_form200.php" method="post" name="form" enctype="multipart/form-data">
    <?php 
          extract($_GET);
          require("../controller/conexion.php");
          $sql="select * from form200 where idform=$id";
          $ressql=mysqli_query($con,$sql);
        


          while ($row=mysqli_fetch_row($ressql)) {
            $idform=$row[1];
            $requiriente=$row[2];
            $empresa=$row[3];
            $area=$row[4];
            $proveedor=$row[5];
            $cheque=$row[6];
            $proforma=$row[7];
            $condicion=$row[8];
            $fecha=$row[9];
            $proyecto=$row[10];
            $observacion=$row[11];
          }

        
     ?>
  
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
          <td colspan="2" align="center">
              dato: <input class="form-styling" type="text" name="dato" id="dato" readonly="readonly" value="<?php echo $id ?>">
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
              <td colspan="5"><input class="form-styling" type="text" name="requiriente" readonly="readonly" placeholder="Requiriente" title="requiriente" value="<?php echo $requiriente ?>" >
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">EMPRESA:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="empresa" id="empresa" placeholder="Empresa" title="empresa" readonly="readonly" required value="<?php echo $empresa ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">AREA:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="area" readonly="readonly" id="area" placeholder="Area" title="area" required  value="<?php echo $area ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROVEEDOR:</label></td>
              <td colspan="5">
          <input class="form-styling" type="text" id='proveedor' name="proveedor" list="prove" autocomplete="off" placeholder="Proveedor" value="<?php echo $proveedor ?>">
          
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CHEQUE A NOMBRE DE:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="cheque" id="cheque" placeholder="Cheque a nombre" title="cheque" required value="<?php echo $cheque ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROFORMA O COTIZACION</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proforma" id="proforma" placeholder="Proforma" title="proforma" required value="<?php echo $proforma ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">CONDICION DE PAGO SEGUN PROFORMA</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="condicion" id="condicion" placeholder="Condicion de proforma" title="condicion" required value="<?php echo $condicion ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">FECHA DE REQUERIMIENTO</label></td>
              <td colspan="5"><input class="form-styling" type="date" name="fecha" id="fecha" value="<?php echo date("Y-m-d");?>" title="fecha" readonly="readonly" required value="<?php echo $fecha ?>">
          </td>
          <td></td><td></td>
            </tr>
            <tr>
              <td></td><td></td>
              <td colspan="2"><label for="fullname">PROYECTO:</label></td>
              <td colspan="5"><input class="form-styling" type="text" name="proyecto" id="proyecto" placeholder="Proyecto" title="proyecto" required value="<?php echo $proyecto ?>">
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
          
        </tr>  






<?php 
       
        
          $sql="select * from requerimiento where idform=$id;";
          $ressql=mysqli_query($con,$sql);
          $cont=1;
          $cod=[11];$gru=[11];$desc=[11];$des=[11];$con=[11];$can=[11];$uni=[11];$mon=[11];$pre=[11];$tot=[110];
          while ($row=mysqli_fetch_row($ressql)) {
            $r[$cont]=$row[0];
            $cod[$cont]=$row[2];
            $gru[$cont]=$row[3];
            $desc[$cont]=$row[4];
            $des[$cont]=$row[5];
            $con[$cont]=$row[6];
            $can[$cont]=$row[7];
            $uni[$cont]=$row[8];
            $mon[$cont]=$row[9];
            $pre[$cont]=$row[10];
            $tot[$cont]=$row[11];
            $cont=$cont+1;
          }
          while ($cont <= 11) {
            $r[$cont]='';
           $cod[$cont]='';
            $gru[$cont]='';
            $desc[$cont]='';
            $des[$cont]='';
            $con[$cont]='';
            $can[$cont]='';
            $uni[$cont]='';
            $mon[$cont]='';
            $pre[$cont]='';
            $tot[$cont]='';
            $cont=$cont+1; 
          }

    
     ?>




          <tr>
          <td>
            <input id="r1" name="r1" type="hidden" value="<?php echo $r[1] ?>">
          <input class="form-styling" type="numero" name="item1" id="item1" value="1" title="item1" readonly="readonly" >
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo1" id="codigo1" title="codigo1" readonly="readonly" value="<?php echo $cod[1] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo1' name="grupo1" list="grupouno" autocomplete="off" value="<?php echo $gru[1] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion1" name="descripcion1" id="descripcion1" list="lista_ciudadesuno" value="<?php echo $desc[1] ?>" autocomplete="off">
          
          </td>
          <td>
          <input class="form-styling" type="text" name="destino1" id="destino1" title="destino1" autocomplete="off" value="<?php echo $des[1] ?>">
          </td>
          <td>
          <select class="form-styling" name="control1" id="control1" >
            <option><?php echo $con[1] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad1" id="cantidad1" title="cantidad1"  onChange="multiplicar1();" autocomplete="off" value="<?php echo $can[1] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida1" id="medida1" title="medida1" readonly="readonly" value="<?php echo $uni[1] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda1" id="moneda1" title="moneda1" value="">
            <option><?php echo $mon[1] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio1" id="precio1" title="precio1"  onChange="multiplicar1();" autocomplete="off" value="<?php echo $pre[1] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total1" id="total1" title="total1" readonly="readonly" onChange="sumart();" value="<?php echo $tot[1] ?>">
          </td>
          </tr>




          <tr>
          <td>
            <input id="r2" name="r2" type="hidden" value="<?php echo $r[2] ?>">
          <input class="form-styling" type="numero" name="item2" id="item2" value="2" title="item2" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo2" id="codigo2"  title="codigo2" readonly="readonly" value="<?php echo $cod[2] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo2' name="grupo2" list="grupodos" onChange="obtenerCiudades2();" autocomplete="off" value="<?php echo $gru[2] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion2" name="descripcion2" id="descripcion2" list="lista_ciudadesdos" value="<?php echo $desc[2] ?>" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino2" id="destino2" title="destino2" value="<?php echo $des[2] ?>">
          </td>
          <td>
          <select class="form-styling" name="control2" id="control2">
            <option><?php echo $con[2] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad2" id="cantidad2" title="cantidad2"  onChange="multiplicar2();" value="<?php echo $can[2] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" value="<?php echo $uni[2] ?>" name="medida2" id="medida2" placeholder="" title="medida2">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda2" id="moneda2" placeholder="" title="moneda2">
            <option><?php echo $mon[2] ?></option><option>Bolivianos</option><option>Dolares</option>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio2" id="precio2" placeholder="" title="precio2"  onChange="multiplicar2();" value="<?php echo $pre[2] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total2" id="total2" placeholder="" title="total2" readonly="readonly" value="<?php echo $tot[2] ?>">
          </td>
          </tr>




           <tr>
          <td>
            <input id="r3" name="r3" type="hidden" value="<?php echo $r[3] ?>">
          <input class="form-styling" type="numero" name="item3" id="item3" value="3" title="item3" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo3" id="codigo3" title="codigo3" readonly="readonly" value="<?php echo $cod[3] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo3' name="grupo3" list="grupotres" onChange="obtenerCiudades3();" autocomplete="off" value="<?php echo $gru[3] ?>">
          
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion3" name="descripcion3" id="descripcion3" list="lista_ciudadestres" value="<?php echo $desc[3] ?>" autocomplete="off">
          
          </td>
          <td>
          <input class="form-styling" type="text" name="destino3" id="destino3" title="destino3" autocomplete="off" value="<?php echo $des[3] ?>">
          </td>
          <td>
          <select class="form-styling" name="control3" id="control3">
            <option><?php echo $con[3] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad3" id="cantidad3" title="cantidad3"  onChange="multiplicar3();" autocomplete="off" value="<?php echo $can[3] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida3" id="medida3" title="medida3" readonly="readonly" value="<?php echo $uni[3] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda3" id="moneda3" title="moneda3">
            <option><?php echo $mon[3] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio3" id="precio3" title="precio3"  onChange="multiplicar3();" autocomplete="off" value="<?php echo $pre[3] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total3" id="total3" title="total3"  readonly="readonly" onChange="sumart();" value="<?php echo $tot[3] ?>">
          </td>
          </tr>



          <tr>
          <td>
            <input id="r4" name="r4" type="hidden" value="<?php echo $r[4] ?>">
          <input class="form-styling" type="numero" name="item4" id="item4" value="4" title="item4" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo4" id="codigo4" title="codigo4" readonly="readonly" value="<?php echo $cod[4] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo4' name="grupo4" list="grupocuatro"  autocomplete="off" value="<?php echo $gru[4] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion4" name="descripcion4" id="descripcion4" list="lista_ciudadescuatro" value="<?php echo $desc[4] ?>" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino4" id="destino4" title="destino4" autocomplete="off" value="<?php echo $des[4] ?>">
          </td>
          <td>
          <select class="form-styling" name="control4" id="control4">
            <option><?php echo $con[4] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad4" id="cantidad4" title="cantidad4"  onChange="multiplicar4();" autocomplete="off" value="<?php echo $can[4] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida4" id="medida4" title="medida4" readonly="readonly" value="<?php echo $uni[4] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda4" id="moneda4" title="moneda4">
            <option><?php echo $mon[4] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio4" id="precio4" title="precio4"  onChange="multiplicar4();" autocomplete="off" value="<?php echo $pre[4] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total4" id="total4" title="total4" value="<?php echo $tot[4] ?>" readonly="readonly" onChange="sumart();">
          </td>
          </tr>





          <tr>
          <td>
            <input id="r5" name="r5" type="hidden" value="<?php echo $r[5] ?>">
          <input class="form-styling" type="numero" name="item5" id="item5" value="5" title="item5" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo5" id="codigo5" title="codigo5" readonly="readonly" value="<?php echo $cod[5] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo5' name="grupo5" list="grupocinco" onChange="obtenerCiudades5();" autocomplete="off" value="<?php echo $gru[5] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion5" name="descripcion5" id="descripcion5" list="lista_ciudadescinco" value="<?php echo $desc[5] ?>" autocomplete="off" >
          </td>
          <td>
          <input class="form-styling" type="text" name="destino5" id="destino5" title="destino5" autocomplete="off" value="<?php echo $des[5] ?>">
          </td>
          <td>
          <select class="form-styling" name="control5" id="control5">
            <option><?php echo $con[5] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad5" id="cantidad5" title="cantidad5"  onChange="multiplicar5();" autocomplete="off" value="<?php echo $can[5] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida5" id="medida5" title="medida5" readonly="readonly" value="<?php echo $uni[5] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda5" id="moneda5" title="moneda5">
            <option><?php echo $mon[5] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio5" id="precio5" title="precio5"  onChange="multiplicar5();" autocomplete="off" value="<?php echo $pre[5] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total5" id="total5" title="total5" value="<?php echo $tot[5] ?>" readonly="readonly" onChange="sumart();">
          </td>
          </tr>


          <tr>
          <td>
            <input id="r6" name="r6" type="hidden" value="<?php echo $r[6] ?>">
          <input class="form-styling" type="numero" name="item6" id="item6" value="6" title="item6" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo6" id="codigo6" title="codigo6" readonly="readonly" value="<?php echo $cod[6] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo6' name="grupo6" list="gruposeis" value="<?php echo $gru[6] ?>" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion6" name="descripcion6" id="descripcion6" list="lista_ciudadesseis" onChange="obtenercampos6();" autocomplete="off" value="<?php echo $desc[6] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino6" id="destino6" title="destino6" autocomplete="off" value="<?php echo $des[6] ?>">
          </td>
          <td>
          <select class="form-styling" name="control6" id="control6">
            <option><?php echo $con[6] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad6" id="cantidad6" title="cantidad6"  onChange="multiplicar6();" autocomplete="off" value="<?php echo $can[6] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida6" id="medida6" title="medida6" readonly="readonly" value="<?php echo $uni[6] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda6" id="moneda6" title="moneda6">
            <option><?php echo $mon[6] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio6" id="precio6" title="precio6"  onChange="multiplicar6();" autocomplete="off" value="<?php echo $pre[6] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total6" id="total6" title="total6" value="<?php echo $tot[6] ?>" readonly="readonly" onChange="sumart();">
          </td>
          </tr>



          <tr>
          <td>
            <input id="r7" name="r7" type="hidden" value="<?php echo $r[7] ?>">
          <input class="form-styling" type="numero" name="item7" id="item7" value="7" title="item7" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo7" id="codigo7" title="codigo7" readonly="readonly" value="<?php echo $cod[7] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo7' name="grupo7" list="gruposiete" onChange="obtenerCiudades7();" autocomplete="off" value="<?php echo $gru[7] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion7" name="descripcion7" id="descripcion7" list="lista_ciudadessiete"  autocomplete="off" value="<?php echo $desc[7] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino7" id="destino7" title="destino7" autocomplete="off" value="<?php echo $des[7] ?>">
          </td>
          <td>
          <select class="form-styling" name="control7" id="control7">
            <option><?php echo $con[7] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad7" id="cantidad7" title="cantidad7"  onChange="multiplicar7();" autocomplete="off" value="<?php echo $can[7] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida7" id="medida7" title="medida7" readonly="readonly" value="<?php echo $uni[7] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda7" id="moneda7" title="moneda7">
            <option><?php echo $mon[7] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio7" id="precio7" title="precio7"  onChange="multiplicar7();" autocomplete="off" value="<?php echo $pre[7] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total7" id="total7" title="total7" value="" readonly="readonly" onChange="sumart();" value="<?php echo $tot[7] ?>">
          </td>
          </tr>


          <tr>
          <td>
            <input id="r8" name="r8" type="hidden" value="<?php echo $r[8] ?>">
          <input class="form-styling" type="numero" name="item8" id="item8" value="8" title="item8" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo8" id="codigo8" title="codigo8" readonly="readonly" value="<?php echo $cod[8] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo8' name="grupo8" list="grupoocho" onChange="obtenerCiudades8();" autocomplete="off" value="<?php echo $gru[8] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion8" name="descripcion8" id="descripcion8" list="lista_ciudadesocho" value="<?php echo $desc[8] ?>" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino8" id="destino8" title="destino8" autocomplete="off" value="<?php echo $des[8] ?>">
          </td>
          <td>
          <select class="form-styling" name="control8" id="control8">
            <option><?php echo $con[8] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad8" id="cantidad8" title="cantidad8"  onChange="multiplicar8();" autocomplete="off" value="<?php echo $can[8] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida8" id="medida8" title="medida8" readonly="readonly" value="<?php echo $uni[8] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda8" id="moneda8" title="moneda8">
            <option><?php echo $mon[8] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio8" id="precio8" title="precio8"  onChange="multiplicar8();" autocomplete="off" value="<?php echo $pre[8] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total8" id="total8" title="total8" value="<?php echo $tot[8] ?>" readonly="readonly" onChange="sumart();">
          </td>
          </tr>



          <tr>
          <td>
            <input id="r9" name="r9" type="hidden" value="<?php echo $r[9] ?>">
          <input class="form-styling" type="numero" name="item9" id="item9" value="9" title="item9" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo9" id="codigo9" title="codigo9" readonly="readonly" value="<?php echo $cod[9] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo9' name="grupo9" list="gruponueve" autocomplete="off" value="<?php echo $gru[9] ?>">
          
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion9" name="descripcion9" id="descripcion9" list="lista_ciudadesnueve" value="<?php echo $desc[9] ?>" autocomplete="off">
          
          </td>
          <td>
          <input class="form-styling" type="text" name="destino9" id="destino9" title="destino9" autocomplete="off" value="<?php echo $des[9] ?>">
          </td>
          <td>
          <select class="form-styling" name="control9" id="control9">
            <option><?php echo $con[9] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad9" id="cantidad9" title="cantidad9"  onChange="multiplicar9();" autocomplete="off" value="<?php echo $can[9] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida9" id="medida9" title="medida9" readonly="readonly" value="<?php echo $uni[9] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda9" id="moneda9" title="moneda9">
            <option><?php echo $mon[9] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio9" id="precio9" title="precio9"  onChange="multiplicar9();" autocomplete="off" value="<?php echo $pre[9] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total9" id="total9" title="total9" value="" readonly="readonly" onChange="sumart();" value="<?php echo $tot[9] ?>">
          </td>
          </tr>


          <tr>
          <td>
            <input id="r10" name="r10" type="hidden" value="<?php echo $r[10] ?>">
          <input class="form-styling" type="numero" name="item10" id="item10" value="10" title="item10" readonly="readonly">
          </td>
          <td>
          <input class="form-styling" type="text" name="codigo10" id="codigo10" title="codigo10" readonly="readonly" value="<?php echo $cod[10] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" id='grupo10' name="grupo10" list="grupodiez" value="<?php echo $gru[10] ?>" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" id="descripcion10" name="descripcion10" id="descripcion10" list="lista_ciudadesdiez" value="<?php echo $desc[10] ?>" autocomplete="off">
          </td>
          <td>
          <input class="form-styling" type="text" name="destino10" id="destino10" title="destino10" autocomplete="off" value="<?php echo $des[10] ?>">
          </td>
          <td>
          <select class="form-styling" name="control10" id="control10">
            <option><?php echo $con[10] ?></option>
            <option>si</option>
            <option>no</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="cantidad10" id="cantidad10" title="cantidad10"  onChange="multiplicar10();" autocomplete="off" value="<?php echo $can[10] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="medida10" id="medida10" title="medida10" readonly="readonly" value="<?php echo $uni[10] ?>">
          </td>
          <td>
          <select class="form-styling" type="text" name="moneda10" id="moneda10" title="moneda10">
            <option><?php echo $mon[8] ?></option><option>Bolivianos</option><option>Dolares</option>
          </select>
          </td>
          <td>
          <input class="form-styling" type="number" name="precio10" id="precio10" title="precio10"  onChange="multiplicar10();" autocomplete="off" value="<?php echo $pre[10] ?>">
          </td>
          <td>
          <input class="form-styling" type="text" name="total10" id="total10" title="total10"  readonly="readonly" onChange="sumart();" value="<?php echo $tot[10] ?>">
          </td>
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
          <input class="btn-signup" type="submit" value="ACTUALIZAR FORMULARIO">
          <div class="row cf" style="color: red"><p id="error"></p></div>
          </div>
          </td>
          </tr>
          </center>
          </table>

  </form>





























</div>
  <script src='../js/jquery.min.js'></script>
<script src='../js/angular.min.js'></script>
<script src="../js/cabecera.js"></script> 
</body>
</html>