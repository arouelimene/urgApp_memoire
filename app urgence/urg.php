<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire d'emergency médicale</title>
  </head>
    <style>
        body
        {background: linear-gradient(90deg, cadetblue,aliceblue,cadetblue);
}
form {
  margin: 0px auto;
        background-color: transparent;
			border-radius: 5px;
			padding: 20px;
			width: 400px;
			margin: auto;
			margin-top: 50px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);;
}

label {
  display: inline-block;
  width: 180px;
  margin-right: 10px;
    color: black;
    font-weight: 550;
}

input[type="radio"] {
  display: inline-block;
  width: 20px;
  margin-right: 5px;
}

input[type="text"], textarea {
  width: 100%;
  padding:5px;
  margin-bottom:20px;
    resize: none;
}

input[type="submit"] {
  display: block;
  margin: 20px auto;
  padding: 10px;
  background-color:red;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
input[type="submit"]:hover {
  background-color: green;
}
        h1{text-align: center;}
       
    </style>
  <body>
    <h1>Formulaire d'emergency médicale</h1>
    <form action="urgence.php" method="post">
      <label for="name">Nom du patient :</label>
      <input type="text" id="name" name="name"><br>

   

 <label for="emergency">Type d'emergency :</label><br>
  <input type="radio" id="brulure" name="emergency" value="brulure">
  <label for="brulure">Brûlure</label><br>
  <input type="radio" id="crise-cardiaque" name="emergency" value="crise-cardiaque">
  <label for="crise-cardiaque">Crise cardiaque</label><br>
  <input type="radio" id="accident-vasculaire" name="emergency" value="accident-vasculaire">
  <label for="accident-vasculaire">Accident vasculaire</label><br>
  <input type="radio" id="traumatisme-crânien" name="emergency" value="traumatisme-crânien">
  <label for="traumatisme-crânien">Traumatisme crânien</label><br>
  <input type="radio" id="fracture" name="emergency" value="fracture">
  <label for="fracture">Fracture</label><br>
  <input type="radio" id="hemorragie" name="emergency" value="hemorragie">
  <label for="hemorragie">Hémorragie</label><br>
  <input type="radio" id="choc-anaphylactique" name="emergency" value="choc-anaphylactique">
  <label for="choc-anaphylactique">Choc anaphylactique</label><br>
  <input type="radio" id="epilepsie" name="emergency" value="epilepsie">
  <label for="epilepsie">Épilepsie</label><br>
  <input type="radio" id="intoxication" name="emergency" value="intoxication">
  <label for="intoxication">Intoxication</label><br>
  <input type="radio" id="infarctus" name="emergency" value="infarctus">
  <label for="infarctus">Infarctus</label><br>
  <input type="radio" id="infection-grave" name="emergency" value="infection-grave">
  <label for="infection-grave">Infection grave</label><br>
  <input type="radio" id="difficulte-respiratoire" name="emergency" value="difficulte-respiratoire">
  <label for="difficulte-respiratoire">Difficulté respiratoire</label><br>
  <input type="radio" id="convulsions" name="emergency" value="convulsions">
  <label for="convulsions">Convulsions</label><br>
  <input type="radio" id="saignement-abondant" name="emergency" value="saignement-abondant">
  <label for="saignement-abondant">Saignement abondant</label><br>
  
          <input type="radio" id="arret-cardiaque" name="emergency" value="arret-cardiaque">
<label for="arret-cardiaque">Arrêt cardiaque</label><br>

<input type="radio" id="saignement" name="emergency" value="saignement-imp">
<label for="saignement">Saignement important</label><br>

<input type="radio" id="fracture" name="emergency" value="fracture">
<label for="fracture">Fracture</label><br>

<input type="radio" id="brulure" name="emergency" value="brulure-imp">
<label for="brulure">Brûlure importante</label><br>

<input type="radio" id="inconscience" name="emergency" value="inconscience">
<label for="inconscience">Perte de connaissance</label><br>


      

      <label for="optional">Information optionnelle :</label><br>
      <textarea id="optional" name="optional" rows="4" cols="50"></textarea><br>

      <label for="room">Numéro de la salle :</label>
      <input type="text" id="room" name="room"><br>

      <label for="bed">Numéro du lit :</label>
      <input type="text" id="bed" name="bed"><br>

      <input type="submit" value="Envoyer">
    </form>
  </body>
</html>

