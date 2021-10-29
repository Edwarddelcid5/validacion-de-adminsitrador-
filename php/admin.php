<?php
session_start();
include('conexion.php');


$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];

$validar_login = mysqli_query($conexion,"SELECT * from administrador where Correo='$Correo' and Contrasena='$Contraseña'");

if (mysqli_num_rows($validar_login) > 0) {
     $_SESSION ['admin']= $Correo;
     echo '
     <script>
     alert("Bienvenido");
     window.location= "../Admin/publicaciones.php"
     </script>

     
     
     ';
    exit;
} else {
    echo '
    <script>
    alert("Usuario no existe, intentar de nuevo");
    window.location= "../index.php"
    </script>
    
    ';
    exit;
}


?>