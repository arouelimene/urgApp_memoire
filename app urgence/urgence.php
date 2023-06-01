<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect('localhost', 'root', "", 'dbmem');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$name = isset($_POST['name']) ? $_POST['name'] : '';
$emergency = isset($_POST['emergency']) ? $_POST['emergency'] : '';
$optional = isset($_POST['optional']) ? $_POST['optional'] : '';
$room = isset($_POST['room']) ? $_POST['room'] : '';
$bed = isset($_POST['bed']) ? $_POST['bed'] : '';

$sql = "INSERT INTO urgence (name,emergency, optional, room, bed) VALUES ('$name','$emergency', '$optional', '$room', '$bed')";

if (mysqli_query($conn, $sql)) {
    header("Location: infirmier.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>