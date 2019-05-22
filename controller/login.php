 <?php
	if(!empty($_POST)){
	if(isset($_POST["nombre_usuario"]) &&isset($_POST["password"])){
		if($_POST["nombre_usuario"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			$user_id=null;
			$nombre=null;
			$apellido=null;
			$sexo=null;
			$email=null;
			$password=$_POST['password'];
			$sql1= "select * from usuario where nombre_usuario=\"$_POST[nombre_usuario]\"  and password='".$password."'";
			$query1 = $con->query($sql1);
			while ($r=$query1->fetch_array()) {
				$user_id=$r["ci"];
				$nombre=$r["nombre"];
				$apellido=$r["apellidos"];
				$sexo=$r["sexo"];
				$email=$r["email"];
				$area=$r["area"];
				$tipo=$r["tipo"];
				
				break;
			}
			mysqli_close($con);
			if($user_id==null){
				print "<script>window.alert('Datos incorrectos, Por favor intentelo otra vez.');window.location='../index.php';</script>";
			}
			else{
				session_start();
				$_SESSION["user_id"]=$user_id;
				$_SESSION["nombre"]=$nombre;
				$_SESSION["apellido"]=$apellido;
				$_SESSION["sexo"]=$sexo;
				$_SESSION["email"]=$email;
				$_SESSION["password"]=$password;
				$_SESSION["area"]=$area;
				$_SESSION["tipo"]=$tipo;
				
				if ($user_id == 0) {
					print "<script>window.location='../views/view_form200.php';</script>";
				}
				print "<script>window.location='../views/view_form200.php';</script>";
				}			
			}
			
		}
	}

?>