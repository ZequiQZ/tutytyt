<?php
session_start();
if(!empty($_POST["btningresar"])){
    if(!empty($_POST["usuario"]) and !empty($_POST["password"])){
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from alumnosdelc where usuarios ='$usuario' and contrasena = '$password'");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->nolist;
            $_SESSION["nombre"]=$datos->nombres;
            $_SESSION["apellido"]=$datos->apellidos;
            header("location: inicio.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso denegado, verifica los datos</div>";
        }
    } else {
        echo "campos vacios";
    }
    
}
?>