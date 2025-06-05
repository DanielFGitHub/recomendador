    document.addEventListener("DOMContentLoaded", function() {
        const edadInput = document.getElementById("edad");
        const recommendationDiv = document.getElementById("recommendation");

        function pedirRecomendacion(genero) {
            const edad = edadInput.value;
            if (!edad) {
                recommendationDiv.textContent = "Por favor, ingresa tu edad.";
                return;
            }

            fetch(`index.php?genero=${encodeURIComponent(genero)}&edad=${encodeURIComponent(edad)}`)
                .then(response => response.text())
                .then(data => {
                    recommendationDiv.textContent = data;
                })
                .catch(() => {
                    recommendationDiv.textContent = "Error al obtener la recomendación.";
                });
        }

        document.getElementById("drama").onclick = () => pedirRecomendacion("Drama");
        document.getElementById("recommendButton2").onclick = () => pedirRecomendacion("Comedia");
        document.getElementById("recommendButton3").onclick = () => pedirRecomendacion("Musical");
        document.getElementById("recommendButton4").onclick = () => pedirRecomendacion("Crimen");
    });