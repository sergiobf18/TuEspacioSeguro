

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio - Tu Espacio Seguro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cabecera.css">
    <style>
        
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
        <div class="container-fluid">
            <!-- Logo y nombre de la marca -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <!-- URL de placeholder para el logo, puedes reemplazar "img/logo2.png" con una URL válida si la tienes -->
                <img class="rounded-circle" src="img/logo2.png" alt="logo" width="50">
                Tu espacio Seguro
            </a>

            <!-- Botón para el menú colapsable en dispositivos móviles -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenido del menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="estudiantes.php">Estudiantes</a></li>
                    <li class="nav-item"><a class="nav-link" href="profesores.php">Profesores</a></li>
                    <li class="nav-item"><a class="nav-link" href="botiquin.php">Botiquín emocional</a></li>
                    <!-- Enlace "Red de Apoyo" con estilo personalizado -->
                    <li class="nav-item"><a class="nav-link text-white px-4 rounded" href="redApoyo.php" style="background-color:#44bac9;">Red de Apoyo</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>