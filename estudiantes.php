<?php  include ("cabecera.php"); ?>
<link rel="stylesheet" href="css/estudiantes.css">

<div class="container mt-4">
    <div class="hero text-center">
        <img class="rounded-circle mt-2" src="img/estudiante.png" alt="estudiante" width="100">
        <h1>Tu vida como estudiante importa, ¡y tu bienestar también! 🌟</h1><br>
        <p>En esta sección encontrarás recursos creados especialmente para ti como estudiante, 
            con el objetivo de apoyarte en tu vida académica y personal, ayudándote a cuidar tu 
            bienestar emocional y mental.</p>
        <a href="cuestionario.php" class="btn btn-custom">Cuestionario Emocional</a>
    </div>
</div>

<div class="container my-5">
    <h2 class="mb-4 text-center consejos-bold"><img class="gif" src="img/ayuda.gif">Consejos para Estudiantes</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

        <!-- Card 1 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card highlight">
            <div class="card-body">
              <div class="card-icon">💤</div>
              <h5 class="card-title">1. Practicar autocuidado intencional</h5>
              <p class="card-text">Crea rutinas saludables: buen sueño, alimentación, ejercicio y menos pantallas.</p>
              <a class="btn btn-link p-0 text-white" data-bs-toggle="collapse" href="#autoDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="autoDetalle">
                <ul class="list-unstyled mb-0 lista-1">
                  <li>• Dormir entre 7 y 9 horas.</li>
                  <li>• Comer frutas y verduras a diario.</li>
                  <li>• Reducir el tiempo frente a pantallas antes de dormir.</li>
                  <li>• Hacer ejercicio o caminatas cortas.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card">
            <div class="card-body">
              <div class="card-icon">🧘‍♂️</div>
              <h5 class="card-title">2. Técnicas de mindfulness</h5>
              <p class="card-text">Pequeñas prácticas de atención plena para relajarte y manejar el estrés.</p>
              <a class="btn btn-link p-0" data-bs-toggle="collapse" href="#mindDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="mindDetalle">
                <ul class="list-unstyled mb-0">
                  <li>• Respira profundo durante 2 minutos.</li>
                  <li>• Escucha música con atención plena.</li>
                  <li>• Usa apps sencillas de meditación.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card highlight">
            <div class="card-body">
              <div class="card-icon">⚠️</div>
              <h5 class="card-title">3. Reconocer señales de cansancio</h5>
              <p class="card-text">Aprende a identificar cuándo estás sobrecargado.</p>
              <a class="btn btn-link p-0 text-white" data-bs-toggle="collapse" href="#cansancioDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="cansancioDetalle">
                <ul class="list-unstyled mb-0 lista-1">
                  <li>• Fatiga constante.</li>
                  <li>• Pérdida de motivación por estudiar.</li>
                  <li>• Irritabilidad o tristeza sin razón aparente.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card">
            <div class="card-body">
              <div class="card-icon">📓</div>
              <h5 class="card-title">4. Equilibrio emocional</h5>
              <p class="card-text">Gestiona tus emociones con técnicas como el diario emocional.</p>
              <a class="btn btn-link p-0" data-bs-toggle="collapse" href="#emocionalDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="emocionalDetalle">
                <ul class="list-unstyled mb-0">
                  <li>• Escribe cómo te sientes al final del día.</li>
                  <li>• Identifica qué te genera esas emociones.</li>
                  <li>• Habla con alguien de confianza si lo necesitas.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card highlight">
            <div class="card-body">
              <div class="card-icon">🕒</div>
              <h5 class="card-title">5. Límites saludables con el estudio</h5>
              <p class="card-text">Organiza tu tiempo para equilibrar estudio, descanso y ocio.</p>
              <a class="btn btn-link p-0 text-white" data-bs-toggle="collapse" href="#limitesDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="limitesDetalle">
                <ul class="list-unstyled mb-0 lista-1">
                  <li>• Planifica horarios de estudio y de descanso.</li>
                  <li>• No estudies justo antes de dormir.</li>
                  <li>• Dedica tiempo a tus hobbies.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card">
            <div class="card-body">
              <div class="card-icon">🏃‍♀️</div>
              <h5 class="card-title">6. Pausas activas y micromomentos</h5>
              <p class="card-text">Haz pausas breves en medio del estudio para recargar energía.</p>
              <a class="btn btn-link p-0" data-bs-toggle="collapse" href="#pausasDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="pausasDetalle">
                <ul class="list-unstyled mb-0">
                  <li>• Estira tu cuerpo por 2 minutos.</li>
                  <li>• Camina unos pasos o toma agua.</li>
                  <li>• Respira profundo con los ojos cerrados.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Card 7 -->
        <div class="col">
          <div class="card h-100 shadow-sm pro-card highlight">
            <div class="card-body">
              <div class="card-icon">💖</div>
              <h5 class="card-title">7. Conocer y gestionar mis emociones</h5>
              <p class="card-text">Explora qué emociones sientes, cómo reconocerlas y qué hacer con ellas.</p>
              <a class="btn btn-link p-0 text-white" data-bs-toggle="collapse" href="#emocionesDetalle" role="button" aria-expanded="false">
                Saber más
              </a>
              <div class="collapse mt-2" id="emocionesDetalle">
                <ul class="list-unstyled mb-0 lista-1">
                  <li>• Aprende a identificar la alegría, tristeza, miedo o enojo.</li>
                  <li>• Reconoce en qué situaciones aparecen.</li>
                  <li>• Descubre cómo canalizarlas de manera positiva.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

    </div>
</div>
<?php  include ("pie.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<br>

