
<?php
session_start();
if($_POST){

    if( ($_POST['usuario']=="lauti") && ($_POST['contrasenia']=="12345") ){
        $_SESSION['usuario']="lauti";
        header("location:index.php");
    }else{
		echo "<script> alert('usuario o contraceña incorrecta');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="author" content="Kodinger">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Clinica Paullier</title>

</head>


<body>


<div class="todo">
    <div class="caja">
        <form action="login.php" method="post">
            <img src="img/logo-verde.png" alt="logo">
                <div class="caja-de-ingreso">
                    <input type="text" class= "form-conytol" name="usuario"  id="user" placeholder="usuario" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="caja-de-ingreso"> 
                        <input type="password"  name="contrasenia" id="password" placeholder="contraseña" required>
                        <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="acordarse">
                        <label><input type="checkbox" name=""> acuèrdate de mì</label>
                </div>
            <button type="submit" class="btn btn-acces" id="button" ><span >ingresar</span>
    </a> </button>
        </form>

    </div>
</div>
</body>
</html>
