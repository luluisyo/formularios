<?php
session_start();
if(!isset($_SESSION["user_id"])){
    print "<script>alert(\"Acceso Restringido, Debe identificarse\");window.location='../index.php';</script>";
}


	include "conexion.php";
	//$encriptado=$_POST['password'];
	$sql = "insert into usuario(
		ci,
		nombre,
		apellidos,
		sexo,
		email,
		nombre_usuario,
		password,
		cargo,
		area,
		tipo
		) values (
			".$_POST['ci'].",
			\"$_POST[nombre]\",
			\"$_POST[apellido]\",
			\"$_POST[sexo]\",
			\"$_POST[email]\",
			\"$_POST[usuario]\",
			\"$_POST[password]\",
			\"$_POST[cargo]\",
			\"$_POST[area]\",
			\"$_POST[tipo]\"
			);";
$query = $con->query($sql);
	
		if($query!=null){
			print 'USUARIO ADICIONADO CORRECTAMENTE';
	}
	else{
			print 'ERROR INTERNO DEL SISTEMA CONSULTE CON EL ADMINISTRADOR';
	}

?>


<head>
    <style type="text/css">
        body{
              background: url(../assets/index.jpg) fixed;
        -webkit-background-size:cover;
        -moz-background-size:cover;
        -o-background-size:cover;
        background-size:cover;
        padding-top: 3%;
        }

        input{
            border: none;
            content: " adsfasdf";
            background: #eee;
            border: 1px solid #ccc;
            border-radius: 15px;
        }
        tr th{
          background-color: #5974FF;
          color: #fff;
            text-align: center;
        }
        .valores{
            text-align: right;
        }
        @font-face{
            font-family: fuentenueva;
            src: url(../fonts/quantifypremium/webdesignpro.ttf);
        }
        .titulo{
            font-size: 40px;
            font-family: fuentenueva;
            color: #fff;
        }
        #unasemana{
            background-color: #6FFF5C;
        }
        #dossemanas{
            background-color: #FFF95E;
        }
        #tressemanas{
            background-color: #FF9E50;
        }
        #cuatrosemanas{
          background-color: #FF9494;
        }
        li:hover{
          background-color: #fff;
        }
    </style>
</head>

<body>
<link rel="stylesheet" type="text/css" href="../css/modal.css">
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<center>
<a class='button' href="../views/add_user.php" target="_blank">	
<br/>ADICIONAR NUEVO USUARIO<br/><br/>
</a>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


<a class='button' href="../views/view_form200.php"><br/>VOLVER A REQUERIMIENTOS<br/><br/></a>
</center>
</body>

