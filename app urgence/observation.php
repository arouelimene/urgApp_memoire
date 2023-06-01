<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['search'])) {
    
    $searchQuery = $_GET['search'];

    $sql = "SELECT * FROM observation WHERE id = '$searchQuery'";
    $result = mysqli_query($conn, $sql);
} else {
    $sql = "SELECT * FROM observation";
    $result = mysqli_query($conn, $sql);
}

if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM observation WHERE id='$id'";
    mysqli_query($conn, $sql);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $nom = $_POST['nom'];
    $motif_consultation = $_POST['motif_consultation'];
    $histoire_maladie = $_POST['histoire_maladie'];
    $examen_general = $_POST['examen_general'];
    $examen_appareils = $_POST['examen_appareils'];
    $examen_analyse = $_POST['examen_analyse'];
    $orientation_clinique = $_POST['orientation_clinique'];

    $sql = "UPDATE observation SET date='$date',nom='$nom', motif_consultation='$motif_consultation', histoire_maladie='$histoire_maladie', examen_general='$examen_general', examen_appareils='$examen_appareils', examen_analyse='$examen_analyse', orientation_clinique='$orientation_clinique' WHERE id='$id'";
    mysqli_query($conn, $sql);

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Tableau Observation Médical</h1>";

    echo '<form action="' . $_SERVER['PHP_SELF'] . '" method="GET">';
    echo '<input type="text" name="search" placeholder="Search by ID">';
    echo '<button type="submit">Search</button>';
    echo '</form>';

      echo "<table>";
    echo "<tr><th>ID</th><th>Date</th><th>Nom</th><th>Motif de consultation</th><th>Histoire de la maladie</th><th>Examen général</th><th>Examen des appareils</th><th>Examen d'analyse</th><th>Orientation clinique</th><th>Action</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<form method='POST'>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td><input type='text' name='date' value='" . $row['date'] . "'></td>";
        echo "<td><input type='text' name='nom' value='" . $row['nom'] . "'></td>";
        echo "<td><input type='text' name='motif_consultation' value='" . $row['motif_consultation'] . "'></td>";
        echo "<td><input type='text' name='histoire_maladie' value='" . $row['histoire_maladie'] . "'></td>";
        echo "<td><input type='text' name='examen_general' value='" . $row['examen_general'] . "'></td>";
        echo "<td><input type='text' name='examen_appareils' value='" . $row['examen_appareils'] . "'></td>";
        echo "<td><input type='text' name='examen_analyse' value='" . $row['examen_analyse'] . "'></td>";
        echo "<td><input type='text' name='orientation_clinique' value='" . $row['orientation_clinique'] . "'></td>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<td><button type='submit' name='update'>Update</button>";
        echo "<button type='submit' name='delete'>Delete</button></td>";
        echo "</form>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun resultat disponible";
}

echo '<button onclick="location.href=\'obs_add.php\'">Nouvelle Observation</button>';

mysqli_close($conn);
?>
<style>
    body {
        background-color: lightgray;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
        padding: 20px;
        border-bottom: 3px solid #ddd;
        color: black;
    }

    tr {
        background-color: white;
    }

    th {
        background-color: cadetblue;
        color: white;
    }

    .button-container {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .button-container button {
        font-size: 16px;
        padding: 10px 20px;
        background-color: lightseagreen;
        color: black;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

