<?php include("cabecera.php"); ?>
<link rel="stylesheet" href="css/cuestionarios.css">
<link rel="stylesheet" href="css/cabecera.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
$resultado = "";
$mostrarModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $puntaje = 0;

    $items_positivos = [0, 3, 5, 8, 13, 16, 18];

    foreach ($_POST['preguntas'] as $indice => $respuesta) {
        $valor = intval($respuesta);
        if (in_array($indice, $items_positivos)) {
            $valor = 5 - $valor;
        }
        $puntaje += $valor;
    }

    if ($puntaje < 36) {
        $resultado = "Ansiedad rasgo baja.";
    } elseif ($puntaje <= 49) {
        $resultado = "Ansiedad rasgo moderada.";
    } else {
        $resultado = "Ansiedad rasgo alta. Podría ser beneficioso hablar con un profesional.";
    }

    $mostrarModal = true;
}
?>
<br>
<br>
<body style="font-family: 'Poppins', sans-serif; background-color: #F8F9FA; color: #333;">
<div class="form-centered-container">
    <div class="card shadow" style="width: 100%; max-width: 600px;">
        <div class="card-header text-white" style="background-color: #6249BA;">
            <h3 class="mb-0">¿Cómo te sientes usualmente?</h3>
            </div>
        <div class="card-body">
            <form method="post" action="">
                <?php
                $preguntas = [
                    "Me siento feliz", "Pierdo oportunidades por no decidirme pronto",
                    "Tengo sentimientos de culpabilidad", "Me siento descansado/a", "Siento que no valgo nada",
                    "Me siento una persona equilibrada", "Me cuesta tomar decisiones", "Soy una persona nerviosa",
                    "Me siento satisfecho conmigo mismo/a", "Siento que la vida es demasiado para mí",
                    "Me falta confianza en mí mismo/a", "Me siento inseguro/a", "Tiendo a preocuparme por pequeñeces",
                    "Me siento fuerte", "Me siento confundido/a", "Me siento deprimido/a", "Tengo autocontrol",
                    "Siento que no puedo controlar las cosas importantes de mi vida", "Me siento tranquilo/a",
                    "Me siento tenso/a con frecuencia"
                ];

                $opciones = [
                    "1" => "Casi nunca", "2" => "A veces", "3" => "Frecuentemente", "4" => "Casi siempre"
                ];

                foreach ($preguntas as $index => $texto) {
                    echo '<div class="mb-3">';
                    echo "<label class='form-label'>" . ($index + 1) . ". $texto</label><br>";
                    foreach ($opciones as $valor => $etiqueta) {
                        echo '<div class="form-check">';
                        echo "<input class='form-check-input' type='radio' name='preguntas[$index]' value='$valor' required>";
                        echo "<label class='form-check-label'>$etiqueta</label>";
                        echo '</div>';
                    }
                    echo '</div>';
                }
                ?>
                <button type="submit" class="btn-custom">Enviar respuestas</button>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="resultadoModal" tabindex="-1" aria-labelledby="resultadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #6249BA; color: white;">
                <h5 class="modal-title" id="resultadoModalLabel">Resultado del cuestionario STAI</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body">
                <?= $resultado ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-custom" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<?php if ($mostrarModal): ?>
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        const myModal = new bootstrap.Modal(document.getElementById('resultadoModal'));
        myModal.show();
    });
</script>
<?php endif; ?>

</body>
</html>
