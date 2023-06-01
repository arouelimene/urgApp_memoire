<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM observation";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h1>Tableau Observation Médical</h1>";
    echo "<table>";
    echo "<tr><th>date</th><th>nom</th><th>motif_consultation</th><th>histoire_maladie</th><th>examen_general</th><th>examen_appareils</th><th>examen_analyse</th><th>orientation_clinique</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['motif_consultation'] . "</td>";
        echo "<td>" . $row['histoire_maladie'] . "</td>";
        echo "<td>" . $row['examen_general'] . "</td>";
        echo "<td>" . $row['examen_appareils'] . "</td>";
        echo "<td>" . $row['examen_analyse'] . "</td>";
        echo "<td>" . $row['orientation_clinique'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

	<style>
        body{background-color: lightgray;}
}
		table {
			border-collapse:collapse;
			width: 100%;
            
		}
		th, td {
			text-align: left;
			padding: 20px;
			border-bottom: 3px solid #ddd;
            color: black;
		}

		tr {
			background-color:white;
		}
        
        

		th {
			background-color: cadetblue;
			color: white;
		}


        
	</style>