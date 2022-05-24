<?php
$host = "localhost";
$user = "root";
$password = "";
$data = "form_reports";

$link = new mysqli($host, $user, $password, $data);
/*
if ($link->connect_errno) {
    echo "ERRO";
} else {
    echo "CONEXÃO EFETUADA";
}
*/

//include_once('config.php');

$lat = $_POST['lat'];
$lon = $_POST['lon'];
$pol = $_POST['pol'];

$results = mysqli_query($link, "INSERT INTO reports(lat, lon, pol) VALUES ($lat, $lon, $pol)");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css">
    <title>Sucesso</title>
    <style>
        h1{
            top: 50%;
            left: 50%;
        }
    </style>
</head>

<body>
    <h1>form sent successfully</h1>
    <button type="submit" onClick="goToMain()">Main</button>
</body>
<script>
    function goToMain() {
        window.location.href = "http://localhost/FormWeb/main.html";
    }
</script>

</html>