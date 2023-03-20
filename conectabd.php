<?php
//Conectar a la base de datos
$conexion = mysqli_connect('localhost', 'root', '', 'bdtic')
or die (mysql_error($mysqli));
//Ingresar datos
insertar($conexion);
function insertar ($conexion){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $edad = $_POST['edad'];
  $correo = $_POST['correo'];
  $numero = $_POST['numero'];
  $carrera = $_POST['carrera'];
  $municipio = $_POST['municipio'];
  $estado = $_POST['estado'];
  $consulta = "INSERT INTO interesados(nombre,apellidos,edad,correo,numero,carrera,municipio,estado)
  VALUES ('$nombre','$apellidos','$edad','$correo','$numero','$carrera','$municipio','$estado')";
  mysqli_query($conexion, $consulta);
  mysqli_close($conexion);
}
header('Location:index.php');
?>
