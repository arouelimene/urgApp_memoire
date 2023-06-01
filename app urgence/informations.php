<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$nom = mysqli_real_escape_string($conn, $_POST['nom']);
$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
$dtn = mysqli_real_escape_string($conn, $_POST['dtn']);
$sexe = mysqli_real_escape_string($conn, $_POST['sexe']);
$telephone = mysqli_real_escape_string($conn, $_POST['telephone']);
$fam = mysqli_real_escape_string($conn, $_POST['fam']);
$urgencenom = mysqli_real_escape_string($conn, $_POST['urgencenom']);
$urgenceprenom = mysqli_real_escape_string($conn, $_POST['urgenceprenom']);
$urgenceemail = mysqli_real_escape_string($conn, $_POST['urgenceemail']);
$urgencerr = mysqli_real_escape_string($conn, $_POST['urgencerr']);
if (isset($_POST['spec'])) {
    $spec = mysqli_real_escape_string($conn, $_POST['spec']);
}

$sql = "INSERT INTO infos(nom, prenom, dtn, sexe, telephone, fam, urgencenom, urgenceprenom, urgenceemail, urgencerr, spec) 
        VALUES ('$nom', '$prenom', '$dtn', '$sexe', '$telephone', '$fam', '$urgencenom', '$urgenceprenom', '$urgenceemail', '$urgencerr', '$spec')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
