<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM analyses";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table>';
    echo '<tr><th>Nom_patient</th><th>Analyses</th><th>Action</th></tr>';
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row["Nom_patient"] . '</td>';
        echo '<td>' . $row["Analyses"] . '</td>';
        echo '<td><form method="post" action=""><input type="hidden" name="id" value="' . $row["id"] . '"><input type="submit" name="delete" value="Delete"></form></td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}

if(isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM analyses WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
       
        header("Refresh:0"); 
    } else {
        echo "Error deleting row: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<style>
		body {
            background-color: azure;}
		h1 {
			margin-top: 50px;
			margin-bottom: 30px;
			font-size: 40px;

		}
		table {
			margin: 0 auto;
			border-collapse: collapse;
			width: 80%;
			background-color: white;
            border-bottom: 2px solid black;
            }
		td {
			padding: 15px;
			text-align: left;
			font-size: 16px;
			border-right: 2px solid black;
			border-left: 2px solid black;
		}
		th {
			background-color: lightblue;
			color: black;
			border-right: 2px solid black;
			border-left: 2px solid black;
			padding: 15px;
			text-align: left;
			font-size: 16px;
            
			border-bottom: 2px solid black;
		}
		tr {
			border-bottom: 1px solid black;
		}
	</style>