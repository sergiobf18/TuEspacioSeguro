<?php include("cabecera.php"); ?>
<link rel="stylesheet" href="css/cabecera.css">
<link rel="stylesheet" href="css/cuestionario.css">


<div class="container mt-5">
        <!-- Imagen compartida principal -->
        <div class="d-flex justify-content-center mb-4">
  <div class="card shadow-sm pro-card highlight text-center" style="max-width: 600px; width: 100%;">
    <div class="card-body">
      <h5 class="card-title">Cuestionarios emocionales</h5>
      <p class="card-text">Este es un espacio en el que puedes identificar como te sientes.</p>
    </div>
  </div>
</div>
        

        <!-- Cards debajo de la imagen -->
        <div class="row justify-content-center g-4"> <!-- Usar g-4 para un buen espaciado entre columnas -->
            <!-- Card 1 -->
            <div class="col-md-4 col-sm-6"> <!-- Añadir col-sm-6 para 2 columnas en tablets -->
                <div class="card shadow">
                    <div class="card-body">
                        <!-- URL de placeholder para la imagen de la tarjeta 1 -->
                        <img class="preguntaimg" src="https://placehold.co/120x120/FFDDC1/E05D5D?text=Emociones" alt="Imagen de emociones">
                        <p class="card-text">¿Cómo te sientes en este momento?</p>
                        <a href="cuestionario1.php" class="btn-custom">Cuestionario</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 col-sm-6"> <!-- Añadir col-sm-6 para 2 columnas en tablets -->
                <div class="card shadow">
                    <div class="card-body">
                        <!-- URL de placeholder para la imagen de la tarjeta 2 -->
                        <img class="preguntaimg" src="https://placehold.co/120x120/D4EECC/5E8B7E?text=Hábitos" alt="Imagen de hábitos">
                        <p class="card-text">¿Cómo te sientes usualmente?</p>
                        <a href="cuestionario2.php" class="btn-custom">Cuestionario</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php  include ("pie.php"); ?>