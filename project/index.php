<?php
session_start();
if(isset($_SESSION["id"])){
	header("Location: inicio.php");
    exit();
} else {
    header("Location: login.php");
    exit();
}
?>