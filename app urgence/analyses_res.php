<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO analysis_results (nom_patient, type_analysis, norme, resultat, commentaire) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $nom_patient, $type_analysis, $norme, $resultat, $commentaire);

$nom_patient = $_POST['nom'];
$type_analysis = $_POST['type'];
$norme = $_POST['norme'];
$resultat = $_POST['resultat'];
$commentaire = $_POST['commentaire'];
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: labo.php");
exit();
?>
