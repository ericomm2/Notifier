<?php 
$link = mysqli_connect('localhost', 'id297950_dadosseminario', 'erico2487701', 'id297950_dadosseminario');
if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sql = "INSERT INTO messages (message) VALUES ('" . $_POST['message'] . "')";

if ($link->query($sql)){
	printf("FOI!!!");
}
else {
	printf("Error: %s\n", $link->error);
}
header("Location: index.php");
?>
