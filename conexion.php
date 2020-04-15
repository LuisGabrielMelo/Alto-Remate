<?php
	//conexion con la base de datos y el servidor
$dbhost="localhost";
$dbuser="gabriel";
$dbpass="gabriel93";
$db="usuarios";
$conexion=""; 

$link= mysqli_connect("localhost", "gabriel","gabriel93", "usuarios");
if (!$conexion)
{
    printf("", mysqli_connect_error());
    die('La Base de Datos No esta Conectada');
}
//$db = mysqli_select_db($link,"usuarios") or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$edad = $_POST['edad'];
	$fecha = $_POST['fecha'];
	$telefono = $_POST['correo'];
	$correo = $_POST['nombres'];
	$usuario = $_POST['usuario'];
	$contraseña = $_POST['contraseña'];

	//Obtiene la longitus de un string
	//$req = (strlen($matricula)*strlen($nombre)*strlen($fecha)*strlen($carreraid)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	#if ($pass != $rpass) {
		#die('Las contraseñas no coinciden, Verifique <br /> <a href="index.html">Volver</a>');
	#}

	//se encripta la contraseña
	#$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	$sql="INSERT INTO registro VALUES('$nombre','$apellido','$edad','$fecha','$telefono','$correo','$usuario','$contraseña')" or die("<h2>Error Guardando los datos</h2>");
	//$ejecutar=mysqli_query($sql);
	if (!mysqli_query($link,$sql)) {
		die("Error: " . mysqli_error($link));
	}
	else{ 
		echo"Datos guardados Correctamente<br><a href='inicio.html' >Volver</a>";

	}


#	if(isset($_POST['btn2']))
#    {
#      include("index.html");
#
#       $doc = $_POST['nombre'];
#      if($doc=="") //VERIFICO QUE AGREGEN UN DOCUMENTO OBLIGATORIAMENTE.
#       {echo "Digita un documento por favor. (Ej: 123)";}
#     else
#     {  
#       $resultados = mysqli_query($link,$sql,"SELECT * FROM $alumno WHERE nombre = $doc");
#       while($consulta = mysqli_fetch_array($resultados))
#       {
#         echo 
#            "
#             <table width=\"100%\" border=\"1\">
#               <tr>
#                 <td><b><center>Documento</center></b></td>
#                 <td><b><center>nombre</center></b></td>
#                 <td><b><center>fecha</center></b></td>
#                 <td><b><center>carreraid</center></b></td>
#               </tr>
#               <tr>
#                 <td>".$consulta['matricula']."</td>
#                 <td>".$consulta['nombre']."</td>
#                 <td>".$consulta['fecha']."</td>
#                 <td>".$consulta['carreraid']."</td>
#               </tr>
#             </table>
#           ";
#         }
#       }

#    include("index.html");
#    }

?>

