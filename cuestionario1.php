<?php include("cabecera.php"); ?>
<link rel="stylesheet" href="css/cuestionarios.css">
<link rel="stylesheet" href="css/cabecera.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php
$resultado = "";
$mostrarModal = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $puntaje = 0;

    
    $items_positivos = [0, 1, 4, 6, 8, 11, 12, 16]; 

    foreach ($_POST['preguntas'] as $indice => $respuesta) {
        $valor = intval($respuesta);

        if (in_array($indice, $items_positivos)) {
            $valor = 5 - $valor; 
        }

        $puntaje += $valor;
    }

    if ($puntaje < 36) {
        $resultado = "Ansiedad baja en este momento.";
    } elseif ($puntaje <= 49) {
        $resultado = "Ansiedad moderada en este momento.";
    } else {
        $resultado = "Ansiedad alta. Sería recomendable hablar con un profesional.";
    }

    $mostrarModal = true;
}
?>
<br>
<br>
<body>
<div class="form-centered-container">
    <div class="card shadow" style="width: 100%; max-width: 600px;">
        <div class="card-header ">
            <h3 class="mb-0">¿Cómo te sientes en este momento?</h3>
        </div>
        <div class="card-body">
            <form method="post" action="">
                <?php
                $preguntas = [
                    "Me siento calmado/a", // Positivo
                    "Me siento seguro/a", // Positivo
                    "Estoy tenso/a",
                    "Me siento contrariado/a",
                    "Estoy a gusto", // Positivo
                    "Siento que estoy a punto de explotar",
                    "Me siento descansado/a", // Positivo
                    "Estoy preocupado/a por posibles errores",
                    "Me siento satisfecho/a", // Positivo
                    "Estoy nervioso/a",
                    "Estoy alterado/a",
                    "Me siento cómodo/a",
                    "Estoy confiado/a", // Positivo
                    "Me siento inquieto/a",
                    "Me siento tenso/a",
                    "Estoy preocupado/a",
                    "Estoy relajado/a",
                    "Estoy nervioso/a por dentro",
                    "Estoy inseguro/a",
                    "Estoy indeciso/a"
                ];

                $opciones = [
                    "1" => "Nada",
                    "2" => "Un poco",
                    "3" => "Bastante",
                    "4" => "Mucho"
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
            <div class="modal-header bg-primary text-white">
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
<?php  include ("pie.php"); ?>
</body>
</html>


