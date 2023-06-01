<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nom = isset($_POST['nom']) ? $_POST['nom'] : '';
$medicaments = isset($_POST['medicaments']) ? $_POST['medicaments'] : '';
$pathologies = isset($_POST['pathologies']) ? $_POST['pathologies'] : '';
$allergies = isset($_POST['allergies']) ? $_POST['allergies'] : '';
$groupe = isset($_POST['groupe']) ? $_POST['groupe'] : '';

$sql = "INSERT INTO fiche (nom,medicaments, pathologies, allergies, groupe) VALUES ('$nom','$medicaments', '$pathologies', '$allergies', '$groupe')";

if (mysqli_query($conn, $sql)) {
    header("Location: patient.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
