<?php
include 'coneccion.php';

// valor numero de la url ?numero = x
//$valor = isset($_GET["numero"]) ? $_GET["numero"] : "";
$valor=$_GET['numero'];

$query = "SELECT * FROM operaciones WHERE numero = '$valor'";
$result = $mysqli->query($query);

if (!$result) {
    die("Error en la consulta: " . $mysqli->error);
}

while ($row = $result->fetch_assoc()) {
    $data[] = array_map('utf8_encode',$row);
}

echo json_encode($data);
$mysqli->close();
?>
