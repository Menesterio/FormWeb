<?php
include("config.php");

$consulta = "SELECT * FROM reports";
$con = $link->query($consulta) or die($link->error);

?>

<!DOCTYPE html>
<html lang="pt-br">

<script>

</script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Reports</title>
</head>

<body>
    <h1>List</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Time</td>
            <td>Latitude</td>
            <td>Longuitude</td>
            <td>Light Polution level</td>
        </tr>
        <?php while ($dado = $con->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["id"]; ?></td>
                <td><?php echo $dado["dat"]; ?></td>
                <td><?php echo $dado["lat"]; ?></td>
                <td><?php echo $dado["lon"]; ?></td>
                <td><?php echo $dado["pol"]; ?></td>
            </tr>
        <?php } ?>
    </table>


</body>

</html>