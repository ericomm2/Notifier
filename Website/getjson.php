<?php 
$link = mysqli_connect('localhost', 'id297950_dadosseminario', 'erico2487701', 'id297950_dadosseminario');
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "SELECT message FROM messages ORDER BY id DESC LIMIT 1";

$result = $link->query($sql);
$result = $result->fetch_object();
$mensagem = $result->message;

print "{message:\"" . $mensagem . "\"}" ;

?>