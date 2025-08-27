<?php 
session_start();

if ($_POST) {
    if ($_POST['usuario'] === "colegio" && $_POST['contraseña'] === "12345") {
        
        // Guardamos el usuario en sesión
        $_SESSION['usuario'] = "colegio";
        
        // Redirigimos al index
        header("Location: index.php");
        exit(); // 🔴 Importante: detener ejecución después de redirigir

    } else {
        echo "<script>alert('Usuario o contraseña incorrectos');</script>";
    }
}
?>


<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="css/login.css">

    </head>
 <br/>
    <body>

    <br>
    <br>
    <div class="container" >

    <div class="row justify-content-center align-items-center g-2" >

    <div class="col-md-4 ">
        
    </div>
    <div class="col-md-4 ">

    <div class="card">
       <div class="card-header">
        <div class="d-flex flex-column align-items-center">
        <strong>BIENVENIDO A TU ESPACIO SEGURO</strong>
        <img class="rounded-circle mt-2" src="img/logo2.png" alt="escudo" width="60">
        </div>
    </div>
        <div class="card-body">
            <form action="login.php" method="post">

        Usuario : <input class="form-control" type="text" name="usuario" id=""> <br/>

        Contraseña : <input class="form-control" type="password" name="contraseña" id=""> <br/>
        <button class="btn-custom" type="submit">Entrar</button>
       </form> 
        </div>
    
    </div>
    
        
    </div>
    <div class="col-md-4 ">
        
    </div>
    </div>
   
        
    </div>
    
        
    
</div>
    
    </body>
</html>
