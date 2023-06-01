<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbmem";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['delete'])){
    $id = $_POST['id'];
    
    $sql = "DELETE FROM urgence WHERE id='$id'";
    mysqli_query($conn, $sql);
}

$sql = "SELECT * FROM urgence";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Name</th><th>Emergency</th><th>Optional</th><th>Room</th><th>Bed</th><th>Action</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['emergency'] . "</td>";
        echo "<td>" . $row['optional'] . "</td>";
        echo "<td>" . $row['room'] . "</td>";
        echo "<td>" . $row['bed'] . "</td>";
        echo "<td>";
        echo "<form method='POST'>";
        echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
        echo "<button type='submit' name='delete'>Delete</button>";
        echo "</form>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);

?>

<style>
	body {
		background-image: url(pic/u12.avif);
        background-repeat: no-repeat;
        background-size: cover;
	}
	h1 {
		margin-top: 50px;
		margin-bottom: 30px;
        font-size: 40px;
        text-align: center;
	}
	table {
		margin: 0 auto;
		border-collapse: collapse;
		width: 80%;
		background-color: white;
        
	}
	td {
		padding: 15px;
		text-align: left;
		border-bottom: 1px;
        font-size: 16px;
        border-right: 2px solid black;
        border-left: 2px solid black;
	}
	th {
		background-color: indianred;
		color: black;
        border-right: 2px solid black;
        border-left: 2px solid black;
        padding: 15px;
        text-align: left;
        font-size: 16px;
        border-bottom: 2px;
	}
    tr {
        border-bottom: 2px solid black;
    }
	</style>