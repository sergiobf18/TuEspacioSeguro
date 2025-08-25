<?php
include("cabecera.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["comentario"])) {
    $comentario = strip_tags($_POST["comentario"]);
    $comentario = trim($comentario);

    if ($comentario !== "") {
        $archivo = fopen("comentarios.txt", "a");
        fwrite($archivo, $comentario . "\n");
        fclose($archivo);
    }

    // 🔁 Redirige después de guardar (evita reenvío al recargar)
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
// Leer comentarios
$comentarios = file_exists("comentarios.txt") ? file("comentarios.txt") : [];
?>

<link rel="stylesheet" href="css/cuestionarios.css">

<div class="form-centered-container">
  <div class="card shadow" style="width: 100%; max-width: 700px;">
    
    <!-- Encabezado -->
    <div class="card-header text-center">
      <h1>Comentarios de Apoyo</h1>
      <p>Aquí puedes mandar mensajes de apoyo o compartir tus experiencias.</p>
    </div>

    <!-- Cuerpo -->
    <div class="card-body">
      
      <!-- FORMULARIO -->
      <form method="POST">
        <textarea name="comentario" class="form-control mb-2" placeholder="Escribe tu comentario..." required></textarea>
        <button type="submit" class="btn-custom">Enviar</button>
      </form>

      <!-- LISTA DE COMENTARIOS -->
      <div class="mt-4">
        <h5>Comentarios:</h5>
        <ul class="list-group">
          <?php if (!empty($comentarios)): ?>
            <?php foreach ($comentarios as $c): ?>
              <li class="list-group-item"><?= htmlspecialchars($c) ?></li>
            <?php endforeach; ?>
          <?php else: ?>
            <li class="list-group-item text-muted">Aún no hay comentarios. Sé el primero en escribir uno ✨</li>
          <?php endif; ?>
        </ul>
      </div>

    </div><!-- /card-body -->

  </div>
</div>


<br>
<?php  include ("pie.php"); ?>