

<?php

session_start();

if(isset($_SESSION['usuario'])!="admin"){


    header("location:index.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>

<body>



<div class="container">

<nav>
     <ul>
         <li>
         <a href="index.php">Inicio</a>
         </li>
         <li>
         <a href="portafolio.php">Portafolio</a>
         </li>
         <li>
         <a href="cerrar.php">Cerrar sesion</a>
         </li>
     </ul>
 </nav>
    





    
