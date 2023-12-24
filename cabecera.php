<?php
session_start();
if(isset($_SESSION['usuario'])!="lauti"){
    header("location:login.php");
}
?>