<?php
include('function.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Fiche médicale</title>
	<style>

			 body{
            background:url(pic/menu1.jpg);
            background-repeat: no-repeat;
            background-size:cover;
        
			font-family: Arial, sans-serif;
		}

		form {
			background-color: transparent;
			border-radius: 5px;
			padding: 20px;
			width: 400px;
			margin: auto;
			margin-top: 50px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		label {
			display: inline-block;
			margin-bottom: 10px;
			font-weight: bold;
            color: black;
		}

		input[type=text], input[type=number] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 12px;
			box-sizing: border-box;
            color: black;
            background-color: lightgrey;
		}

		textarea {
			width: 100%;
			height: 100px;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 12px;
			box-sizing: border-box;
            color: black;
            background-color:lightgrey;
		}

		button {
			background-color: black;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 12px;
			cursor: pointer;
			width: 100%;
		}
        h2{text-decoration:underline;
            color: black;
        
        
        }
		button:hover {
			background-color:black;
		}
        select{appearance: none;
            
  background-color: lightgrey;
  border: yes;
  padding: 0 1em 0 0;
  margin: 0;
  width: 30%;
  font-family: inherit;
  font-size: inherit;
  cursor: inherit;
  line-height: inherit;
        border-radius: 12px;}
	</style>
</head>
<body>
	<form action="fiche.php" method="post">
		<h2>Fiche médicale</h2>
		
        <label for="nom"><b>Nom et Prenom</b></label>
        <textarea placeholder="Entrer les coordonées du patient" name="nom" required></textarea>

        <label for="medicaments"><b>Médicaments actuelles</b></label>
        <textarea placeholder="Entrer les Médicaments actuelles du patient" name="medicaments" required></textarea>

		<label for=" pathologies"><b>Pathologies</b></label>
            <textarea placeholder="Entrer les pathologies " name="pathologies"></textarea>
        
        <label for=" allergies"><b>Allergies</b></label>
            <textarea placeholder="Entrer allergies"name= "allergies"></textarea>       
            <label for="groupe"><b>Groupe sanguin</b></label>
<select name="groupe">
    <option>AB+</option>
    <option>AB-</option>
    <option>A+</option>
    <option>A-</option>
    <option>O+</option>
    <option>O-</option>
    <option>B+</option>
    <option>B-</option>
</select>

                


		<button type="submit">Soumettre</button>
       <a href ="patient.php">Menu Principale </a>
	</form>
</body>
</html>

	