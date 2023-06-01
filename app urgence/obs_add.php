<!DOCTYPE html>
<html>
<head>
	<title>Observation Form</title>
	<style>
        body{background-image: url(pic/obs8.avif);
            background-repeat: no-repeat;
            background-size: cover;
        }
		
		form {
			max-width: 500px;
			margin: auto;
			padding: 20px;
			border: 1px solid black;
			border-radius: 5px;
            color: black;
            background-color:transparent;
		}

		label {
			display:block;
			margin-bottom: 10px;
            font-size: 40x;
            text-decoration: underline;
            
            
           
        }
        input{display:block;
			margin-bottom: 10px;
            font-size: 20px;
        background-color: aliceblue}
        label{font-size: 20px;}

		input[type="submit"] {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			border-radius: 5px;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
        textarea{font-size: 20px;
        background-color: aliceblue;}
	</style>
</head>
<body>
	<form method="post">
		<label for="date">Date:</label>
		<input type="date" name="date" required>

		<label for="nom">Nom:</label>
		<input type="text" name="nom" required>

		<label for="motif_consultation">Motif de consultation:</label>
		<input type="text" name="motif_consultation">

		<label for="histoire_maladie">Histoire de la maladie:</label>
		<textarea name="histoire_maladie"></textarea>

		<label for="examen_general">Examen général:</label>
		<textarea name="examen_general"></textarea>

		<label for="examen_appareils">Examen des appareils:</label>
		<textarea name="examen_appareils"></textarea>

		<label for="examen_analyse">Examen d'analyse:</label>
		<textarea name="examen_analyse"></textarea>

		<label for="orientation_clinique">Orientation clinique:</label>
		<input type="text" name="orientation_clinique">

		<input type="submit" name="submit" value="Enregistrer">
	</form>

	<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dbmem";

	$conn = mysqli_connect($host, $username, $password, $dbname);

	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

		if (isset($_POST['submit'])) {
		$date = $_POST['date'];
		$nom = $_POST['nom'];
		$motif_consultation = $_POST['motif_consultation'];
		$histoire_maladie = $_POST['histoire_maladie'];
		$examen_general = $_POST['examen_general'];
		$examen_appareils = $_POST['examen_appareils'];
		$examen_analyse = $_POST['examen_analyse'];
		$orientation_clinique = $_POST['orientation_clinique'];

		$conn = mysqli_connect("localhost", "root", "", "dbmem");

		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO observation (date, nom, motif_consultation, histoire_maladie, examen_general, examen_appareils, examen_analyse, orientation_clinique) VALUES ('$date', '$nom', '$motif_consultation', '$histoire_maladie', '$examen_general', '$examen_appareils', '$examen_analyse', '$orientation_clinique')";

		if (mysqli_query($conn, $sql)) {
			 header('Location: observation.php');
		} else {
			echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);
	}
	?>
</body>
</html>
