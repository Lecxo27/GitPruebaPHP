<!DOCTYPE html>
<html>
<head>
    <title>Aplicación de Entrada a Países</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('a.pais-link').click(function(e) {
                e.preventDefault();
                var pais = $(this).data('pais');
                procesarPais(pais);
            });

            function procesarPais(pais) {
                $.ajax({
                    url: 'procesarA.php',
                    method: 'GET',
                    data: { pais: pais },
                    success: function(response) {
                        $('#resultado').html(response);
                    },
                    error: function() {
                        $('#resultado').html('<h1>Error al procesar la solicitud.</h1>');
                    }
                });
            }
        });
    </script>
</head>
<body>
    <h1>Aplicación de Entrada a Países</h1>

    <div>
        <h2>Seleccione el país que desea visitar:</h2>
        <ul>
            <li><a href="#" class="pais-link" data-pais="Mexico">México</a></li>
            <li><a href="#" class="pais-link" data-pais="Estados Unidos">Estados Unidos</a></li>
            <li><a href="#" class="pais-link" data-pais="Canada">Canadá</a></li>
        </ul>
    </div>

    <div id="resultado"></div>
</body>
</html>