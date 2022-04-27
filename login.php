<?php


session_start();

if($_POST){

        if($_POST['usuario']=="admin" && $_POST['password']="password"){


        $_SESSION['usuario']="admin";


        echo "logeado";

        header("location:index.php");

         

        }else{

        
        echo "<script> alert('usuario o password incorrecta') </script>" ;
        


}

}

?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


    <div class="container">

        <div class="row">
            <div class="col-md-4">

            </div>

            <div class="col-md-4">

                <div class="card mt-5">
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="post">


                            <label for="">Usuario :</label>
                            <input class="form-control"  name="usuario";  type="text" name="" id="">

                            <label for="">Password : </label>
                            <input class="form-control"  name="password"  type="password" name="" id="">

                            <br>

                            <button class="btn btn-success" type="submit">Entrar al portafolio</button>


                        </form>
                    </div>

                </div>

            </div>

            <div class="col-md-4">

            </div>

        </div>




    </div>






</body>

</html>