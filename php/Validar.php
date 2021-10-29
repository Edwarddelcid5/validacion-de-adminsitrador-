<?php
session_start();
include('conexion.php');


$Correo = $_POST['Correo'];
$Contraseña = $_POST['Contraseña'];

$validar_login = mysqli_query($conexion,"SELECT * from registro where Correo='$Correo' and Contraseña='$Contraseña'");

if (mysqli_num_rows($validar_login) > 0) {
     $_SESSION ['usuario']= $Correo;
     echo '
     <script>
     alert("Bienvenido");
     window.location= "../publicaciones/aceso.php"
     </script>

     
     
     ';
    exit;
} else {
    echo '
    <script>
    alert("Usuario no existe, intentar de nuevo");
    window.location= "../Login.php"
    </script>
    
    ';
    exit;
}


?>