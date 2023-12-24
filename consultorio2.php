<?php include("cabecera.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>consultorio-menù</title>
</head>
<body>
    <div class="container">
     <div class="row">
         <div class="col mt-3">
            <div class="row">
                <a href="calendario.php"><img src="img/calendario.png" alt="calendario" style="height: 300px; width: 300px; margin-left: 50px;" ></a>
            </div>
            <div class="row">
                <img src="img/logo.png" alt="logo"  style="height: 300px; width: 300px; margin-left: 50px;">
            </div>
         </div>
         <div class="col" id="col2">
            <div class="row" id="botones">
                <center>
                <a href="index.php" style="text-decoration: none"><h1 style="color: #6CD8BA;">INICIO</h1></a>
                 </center>
            </div>
            <div class="row" id="botones">
                <center>
                 <a href="pacientes2.php" style="text-decoration: none"><h1 style="color: #6CD8BA;">PACIENTES</h1></a>
                </center>
            </div>
            <div class="row" id="botones">
                <center>
                 <a href="facturaciones2.php" style="text-decoration: none"><h1 style="color: #6CD8BA;">FACTURACIONES</h1></a>
                </center>
            </div>
         </div>
     </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>