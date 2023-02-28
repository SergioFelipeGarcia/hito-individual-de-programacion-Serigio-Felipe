<?php
$usuario=$_POST ['usuario'];
$clave=$_POST ['clave'];

$conexion=mysqli_connect("localhost","root","","registros");

$consulta="SELECT * FROM usuarios WHERE usuario='$usuario' and clave='$clave' ";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0){
    header("location:index.php");

}
else {
    echo('Usuario o Password no valido');
}
mysqli_close($conexion);
?>