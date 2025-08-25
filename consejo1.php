<?php  include ("cabecera.php"); ?>
<link rel="stylesheet" href="css/profesores.css">


<div class="container mt-4">
        <div class="hero">
            <img class="rounded-circle mt-2" src="img/profesor.png" alt="profesor" width="100">
            <h1>La vida docente también tiene sus desafíos, ¿verdad?</h1><br>
            <p>En esta sección hemos reunido recursos especialmente diseñados para ti, profesor o profesora, 
                con el objetivo de acompañarte en el ejercicio de tu vocación y ayudarte a cuidar de tu bienestar 
                emocional y mental.</p>
            <a href="cuestionario.php" class="btn btn-custom">Cuestionario Emocional</a>
        </div>
    </div>
<div class="container my-5">
    
    <h2 class="mb-4 text-center"><img class="gif" src="img/ayuda.gif">Consejos para Docentes</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <!-- Card 1 -->
      <div class="col">
        <div class="card h-100 shadow-sm pro-card">
          <div class="card-body">
            <h5 class="card-title">1. Practicar el autocuidado de forma intencional</h5>
            <p class="card-text">Establece rutinas de sueño, alimentación saludable, actividad física regular y desconexión tecnológica.</p>
            <a href="consejo1.php">Ver mas</a>
        </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col"> 
  <div class="card h-100 shadow-sm pro-card">
    <div class="card-body">
      <h5 class="card-title">2. Aplicar técnicas de mindfulness</h5>
      <p class="card-text">Realiza ejercicios diarios de atención plena, como respiración consciente.</p>

      <!-- Botón que despliega la lista -->
      <a class="btn btn-link p-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="mindfulnessDetalle">
        Ver más
      </a>

      <!-- Contenido oculto -->
      <div class="collapse mt-2" id="mindfulnessDetalle">
        <ul class="list-unstyled mb-0">
          <li>• Haz una pausa de 2 minutos entre clases para respirar profundamente.</li>
          <li>• Usa una app de meditación para realizar una sesión guiada diaria.</li>
          <li>• Observa conscientemente tus pensamientos sin juzgarlos durante 5 minutos.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

      <!-- Card 3 -->
      <div class="col">
        <div class="card h-100 shadow-sm pro-card">
          <div class="card-body">
            <h5 class="card-title">3. Reconocer señales de burnout</h5>
            <p class="card-text">Identifica síntomas como agotamiento físico/emocional, despersonalización o falta de realización personal.</p>
            <a href="consejo3.php">Ver mas</a>  
        </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col">
        <div class="card h-100 shadow-sm pro-card">
          <div class="card-body">
            <h5 class="card-title">4. Fomentar el equilibrio emocional</h5>
            <p class="card-text">Aprende a gestionar emociones con técnicas como el diario emocional.</p>
            <a href="consejo4.php">Ver mas</a>  
        </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col">
        <div class="card h-100 shadow-sm pro-card">
          <div class="card-body">
            <h5 class="card-title">5. Establecer límites laborales saludables</h5>
            <p class="card-text">Separa horarios laborales de los personales y respeta los tiempos de descanso.</p>
            <a href="consejo5.php">Ver mas</a>  
        </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col">
        <div class="card h-100 shadow-sm pro-card">
          <div class="card-body">
            <h5 class="card-title">6. Implementar pausas activas y microprácticas</h5>
            <p class="card-text">Realiza pausas breves entre clases para estirarte, respirar o desconectar.</p>
            <a href="consejo6.php">Ver mas</a>  
        </div>
        </div>
      </div>

    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<br>
<?php  include ("pie.php"); ?>