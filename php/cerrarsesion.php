<?php
session_start();
session_destroy();
header("Location:../publicaciones/index.php")
?>