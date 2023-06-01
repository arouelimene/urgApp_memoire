<!DOCTYPE html>
<html>
<head>
  <title>Insert Data</title>
    
    <style>
        
       
        form {
			background-color: transparent;
			border-radius: 20px;
			padding: 50px;
			width: 400px;
			margin: auto;
			margin-top: 50px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}
        Button {
                    display: inline-block;
                    outline: none;
                    cursor: pointer;
                    font-size: 16px;
                    line-height: 5px;
                    font-weight: 600;
                    border-radius: 8px;
                    padding: 20px 20px;
                    border: none;
                    background-color:skyblue;
                    color: black;
        
        }
        body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(90deg, cadetblue,aliceblue,white);
  font-family: "Sansita Swashed", cursive;
}
        label {

font-family: 'Heebo', sans-serif;
font-size: 1.2rem;
font-weight: 400;
letter-spacing: 0.2rem;
font-style:normal;
text-transform:full-width;
color: black;

border-radius: 0.15rem;
-webkit-border-radius: 0.15rem;
-moz-border-radius: 0.15rem;
padding: 0.002rem 0.0001rem;
border-style: none;
border-width: 0rem;
-webkit-box-shadow: -0.25px 0.75px 9px -0.25px rgba(85,85,85,0.36);
-moz-box-shadow: -0.25px 0.75px 9px -0.25px rgba(85,85,85,0.36);

}
    </style>
</head>
<body>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "dbmem";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  
  $stmt = $conn->prepare("INSERT INTO analyses (Nom_patient, Analyses) VALUES (?, ?)");
  $stmt->bind_param("ss", $nom_patient, $analyses);

  
  $nom_patient = $_POST["Nom_patient"];
  $analyses = implode(", ", $_POST["emergency"]);

  
  if ($stmt->execute()) {
  header("Location: doctor.php");
  } else {
    echo "Error inserting data: " . $stmt->error;
  }

  $stmt->close();
  $conn->close();
}
?>



<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h1>Analyses a faire </h1>
  <label for="Nom_patient">Nom Patient:</label>
  <input type="text" name="Nom_patient" required><br><br>
<input type="checkbox" id="Protéine C" name="emergency[]" value="Protéine C	">
<label for="Protéine">Protéine C</label><br>
<input type="checkbox" id="Magnésium" name="emergency[]" value="Magnésium">
<label for="Magnésium">Magnésium</label><br>
<input type="checkbox" id="Glycémie" name="emergency[]" value="Glycémie">
<label for="Glycémie">Glycémie</label><br>
<input type="checkbox" id="Cholestérol total" name="emergency[]" value="Cholestérol total">
<label for="Cholestérol total">Cholestérol total</label><br>
<input type="checkbox" id="Vitamine D" name="emergency[]" value="Vitamine D">
<label for="Vitamine D">Vitamine D</label><br>
<input type="checkbox" id="Calcium des urines de 24h" name="emergency[]" value="Calcium des urines de 24h">
<label for="Calcium des urines de 24h">Calcium des urines de 24h</label><br>
<input type="checkbox" id="choc-Bactériologie vaginale PV	" name="emergency[]" value="Bactériologie vaginale PV	">
<label for="Bactériologie vaginale PV	">Bactériologie vaginale PV	</label><br>
<input type="checkbox" id="TSH" name="emergency[]" value="TSH">
<label for="TSH">TSH</label><br>
<input type="checkbox" id="Acide Urique	" name="emergency[]" value="Acide Urique	">
<label for="Acide Urique	">Acide Urique	</label><br>
<input type="checkbox" id="ALAT / SGPT" name="emergency[]" value="ALAT / SGPT">
<label for="ALAT / SGPT">ALAT / SGPT</label><br>
    <input type="checkbox" id="Hémoglobine" name="emergency[]" value="Hémoglobine">
<label for="Hémoglobine">Hémoglobine</label><br>
<input type="checkbox" id="Fer sérique" name="emergency[]" value="Fer sérique">
<label for="Fer sérique">Fer sérique</label><br>
<input type="checkbox" id="Bilan thyroïdien" name="emergency[]" value="Bilan thyroïdien">
<label for="Bilan thyroïdien">Bilan thyroïdien</label><br>
<input type="checkbox" id="Vitesse de sédimentation (VS)" name="emergency[]" value="Vitesse de sédimentation (VS)">
<label for="Vitesse de sédimentation (VS)">Vitesse de sédimentation (VS)</label><br>
<input type="checkbox" id="Bilan hépatique" name="emergency[]" value="Bilan hépatique">
<label for="Bilan hépatique">Bilan hépatique</label><br>
<input type="checkbox" id="Numération formule sanguine" name="emergency[]" value="Numération formule sanguine">
<label for="Numération formule sanguine">Numération formule sanguine</label><br>
<input type="checkbox" id="C-Reactive Protein (CRP)" name="emergency[]" value="C-Reactive Protein (CRP)">
<label for="C-Reactive Protein (CRP)">C-Reactive Protein (CRP)</label><br>
<input type="checkbox" id="Glycated Hemoglobin (HbA1c)" name="emergency[]" value="Glycated Hemoglobin (HbA1c)">
<label for="Glycated Hemoglobin (HbA1c)">Glycated Hemoglobin (HbA1c)</label><br>
<input type="checkbox" id="Coagulation Profile" name="emergency[]" value="Coagulation Profile">
<label for="Coagulation Profile">Coagulation Profile</label><br>
<input type="checkbox" id="Thyroid Stimulating Hormone (TSH)" name="emergency[]" value="Thyroid Stimulating Hormone (TSH)">
<label for="Thyroid Stimulating Hormone (TSH)">Thyroid Stimulating Hormone (TSH)</label><br>



  <button type="submit">envoyer</button>
</form>

</body>
</html>
