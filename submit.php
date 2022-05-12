<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Formulário</title>
</head>

<body>
    <script>
        function find() {
            if ('geolocation' in navigator) {

                $lat = 0;
                $lon = 0;

                navigator.geolocation.getCurrentPosition(function(position) {

                    $lat = position.coords.latitude;
                    $lon = position.coords.longitude;
                    window.document.getElementById("lat").value = $lat;
                    window.document.getElementById("lon").value = $lon;

                }, function(error) {

                    console.log(error);

                });

            } else {
                alert("N/A");
            }
        }

        function slider() {
            var slider = document.getElementById("pol");

            window.document.getElementById("val").innerHTML = slider.value;
        }
    </script>
    <h1></h1>
    <form class="form" method="POST" action="http://localhost/Formul%C3%A1rio/enviar.php">
        <fieldset>
            <h2 id="ssss">aaaaa</h2>
            <p>Latitude</p>
            <input type="number" step="any" value="" name="lat" id="lat" min="-90" max="90" required>
            <p>Longitude</p>
            <input type="number" step="any" value="" name="lon" id="lon" min="-180" max="180" required>
            <p>Nível de poluição luminosa</p>
            <span id="val">4</span><input type="range" class="slider" name="pol" id="pol" min="0" max="7" onchange="slider()" required>
        </fieldset>
        <button type="button" onClick="find()">Localizar</button>
        <button type="submit" onClick="clicar()">Enviar</button>
    </form>
    <script>
        function clicar() {

        }
    </script>
</body>

</html>