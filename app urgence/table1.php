<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM fiche";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Nom-Prénom</th><th>Medicaments</th><th>Pathologies</th><th>Allergies</th><th>Groupe</th></tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row["id"] . '</td>';
        echo '<td>' . $row["nom"] . '</td>';
        echo '<td>' . $row["medicaments"] . '</td>';
        echo '<td>' . $row["pathologies"] . '</td>';
        echo '<td>' . $row["allergies"] . '</td>';
        echo '<td>' . $row["groupe"] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

mysqli_close($conn);
?>

<style>
body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg,lightgray,midnightblue);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
    text-align: center;
}

table {
  width: 800px;
  margin: auto;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0,0,0,0.1);
    border-right: 1px solid black;
    border-left: 1px solid black;
    border-bottom: 1px solid black;
}

th,
td {
  padding: 15px;
  background-color: rgba(255,255,255,0.2);
  color: #fff;
}

tr:nth-child(even) {
  background-color: rgba(255,255,255,0.1);
}

th {
  text-align: left;
}

thead {
  th {
    background-color: #55608f;
  }
}

tbody {
  tr {
    &:hover {
      background-color: rgba(255,255,255,0.3);
    }
  }
  td {
    position: relative;
    &:hover {
      &:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: -9999px;
        bottom: -9999px;
        background-color: rgba(255,255,255,0.2);
        z-index: -1;
      }
    }
  }
}

</style>
