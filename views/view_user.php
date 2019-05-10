<?php
session_start();
if(isset($_SESSION["user_id"])){
    if($_SESSION["user_id"]!= 0){
        print "<script>alert(\"No esta autorizado para ver esta página, consulte con el administrador\");window.location='../index.php';</script>";
    }
}
else{
    print "<script>alert(\"Acceso denegado, Debe identificarse\");window.location='../index.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FORMULARIO 200</title>
    <link rel="shortcut icon" href="../assets/favicono.ico">
    <link rel='stylesheet prefetch' href='../plugins/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='../plugins/css/jquery.dataTables.min.css'>
    <link rel='stylesheet prefetch' href='../plugins/css/buttons.dataTables.min.css'>
    <link rel="stylesheet" href="../css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="../css/cabecera.css"> <!-- Resource style -->
    <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <style type="text/css">
        body{
            padding: 25px;   
        }

        input{
            border: none;
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 15px;
        }
        tr th{
            text-align: center;
            color: #002;
        }
        .valores{
            text-align: right;
        }
        @font-face{
            font-family: fuentenueva;
            src: url(../font/quantifypremium/webdesignpro.ttf);
        }
        .titulo{
            font-size: 40px;
            font-family: fuentenueva;
        }
    </style>
</head>
<body>
    <nav class="cd-stretchy-nav">
        <a class="cd-nav-trigger" href="#0">
            
            <span aria-hidden="true"></span>
        </a>

        <ul>
            <li><a href="../views/add_user.php"><span><font color="red">Añadir nuevos usuarios</font></span></a></li>
            <li><a href="../controller/logout.php"><span><font color="red">Salir: <?php echo $_SESSION["nombre"]  ?></font></span></a></li>
        </ul>

        <span aria-hidden="true" class="stretchy-nav-bg"></span>
    </nav>


    <br>
    <br>
    <h1 class="titulo"><center>USUARIOS CON ACCESO AL SISTEMA</center></h1>
    
<select class="chosen" title="CODIGO__DESCRIPCION" name="input_25[]" style=""><option value="180101HNP50K,    PONCHILLO DE 62*100 P/BOLSA DE HNA 50 KG">180101HNP50K,    PONCHILLO DE 62*100 P/BOLSA DE HNA 50 KG</option><option value="180101HNPMA50,    BOLSAS POLIPROP. 50 KG C/IMPRESION (PMA)">180101HNPMA50,    BOLSAS POLIPROP. 50 KG C/IMPRESION (PMA)</option>
    <option value="400100TE335,    TELA NYLON TEJIDO PA-52GG-335">400100TE335,    TELA NYLON TEJIDO PA-52GG-335</option></select>



<div class="chosen-container chosen-container-single" style="width: 445px; display: block;" title="CODIGO__DESCRIPCION">
    <a class="chosen-single">
        <span>180101HNP50K,    PONCHILLO DE 62*100 P/BOLSA DE HNA 50 KG</span>
        <div>
            <b>
            </b>
        </div>
    </a>
    <div class="chosen-drop">
        <div class="chosen-search"><input type="text" autocomplete="off">
        </div>
        <ul class="chosen-results">
            <li class="active-result result-selected" data-option-array-index="0" style="">180101HNP50K,    PONCHILLO DE 62*100 P/BOLSA DE HNA 50 KG</li>
            <li class="active-result" data-option-array-index="1" style="">180101HNPMA50,    BOLSAS POLIPROP. 50 KG C/IMPRESION (PMA)</li>
            <li class="active-result" data-option-array-index="2" style="">180101HNS1@,    BOLSAS POLIPROP. 1@ 45X65/66 C/IMPRESIÓN LA SUPREMA</li>
            <li class="active-result" data-option-array-index="651" style="">400100TE335,    TELA NYLON TEJIDO PA-52GG-335
            </li>
        </ul>
        </div>
        </div>



    <select><option>asdasdas</option></select>

    <br>
    <br>
    <br>
<table id="example" class="display table table-bordered table-hover nowrap compact" cellspacing="0" width="100%">
        
        <thead>
        <tr>
        <td>item</td>
        <td>codigo</td>
        <td>grupo</td>
        <td>item</td>
        <td>codigo</td>
        <td>grupo</td>
        <td>item</td>
        <td>codigo</td>
        <td>grupo</td>
        <td>item</td>
        <td>codigo</td>
        
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>item</td>
        <td>codigcodigcodigcodigcodigo</td>
        <td>grupo grupogrupo grupogrupo</td>
        <td>item  itemitemitemitemitem</td>
        <td>codigo  codigocodigo codigo</td>
        <td>grupo grupogrupogrupo grupo </td>
        <td>item itemitemitemitem item</td>
        <td>codigo codigo codigo</td>
        <td>grupo grupo grupo</td>
        <td>item itemitemitem</td>
        <td>codigo codigocodigo</td>
        
        </tr>
        
      </tbody>
    </table>
  <table id="example1" class="display table table-bordered table-hover nowrap compact" cellspacing="0" width="100%">
        
        <thead>
        <tr>
        <td>item</td>
        <td>codigo</td>
        <td>grupo</td>
        <td>item</td>
        <td>codigo</td>
        <td>grupo</td>
        <td>item</td>
        <td>codigo</td>
        <td>grupo</td>
        <td>item</td>
        <td>codigo</td>
        
        </tr>
        </thead>
        <tbody>
        <tr>
        <td>item</td>
        <td>codigcodigcodigcodigcodigo</td>
        <td>grupo grupogrupo grupogrupo</td>
        <td>item  itemitemitemitemitem</td>
        <td>codigo  codigocodigo codigo</td>
        <td>grupo grupogrupogrupo grupo </td>
        <td>item itemitemitemitem item</td>
        <td>codigo codigo codigo</td>
        <td>grupo grupo grupo</td>
        <td>item itemitemitem</td>
        <td>codigo codigocodigo</td>
        
        </tr>
        
      </tbody>
    </table>
    


<input type="text" id="busqueda" />
             
<div id="resultado"></div>




<form name="formulario" method="post" action="http://pagina.com/send.php">
  <!-- Campo de texto combinado con lista de opciones -->
  <input type="text" list="items">
  <!-- Lista de opciones -->
  <datalist id="items">
    <option value="1">Opción 1</option>
    <option value="2">Opción 2</option>
    <option value="3">Opción 3</option>
  </datalist>
</form>



    <script src='../plugins/js/jquery-2.2.4.min.js'></script>
    <script src='../plugins/js/jquery.dataTables.min.js'></script>
    <script src='../plugins/js/dataTables.buttons.min.js'></script>
    <script src='../plugins/js/buttons.flash.min.js'></script>
    <script src='../plugins/js/jszip.min.js'></script>
    <script src='../plugins/js/pdfmake.min.js'></script>
    <script src='../plugins/js/vfs_fonts.js'></script>
    <script src='../plugins/js/buttons.html5.min.js'></script>
    <script src='../plugins/js/buttons.print.min.js'></script>
    <script src="../js/cabecera.js"></script> 
    <script type="text/javascript">
        $(document).ready(function() {

    $('#example').DataTable({
        "paging":   true,
        "info":     true,
        language: {
        "decimal": ".",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    //Añadir Scroll
        //"scrollY":        "50vh",//define el tamaño o dinamismo de la tabla
        //"scrollCollapse": true,
        //"paging":         false,
    dom: 'Bfrtip',
        buttons: [
            'excel',
            'pdf',
            
            {extend: 'pdfHtml5',
            orientation: 'landscape',
            pageSize: 'LEGAL'
        }
    ]
    } );

    var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "buscar.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });



} );
    </script>
    
</body>
</html>