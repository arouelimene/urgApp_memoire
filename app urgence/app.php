<?php
include('function.php');
?>

<!DOCTYPE html>
<html>
  <head>
 <meta charset="utf-8">
    <title>Informations</title>
      <h1>Veuillez choisir votre catégorie et remplir vos informations</h1>
    <style>
        body{
            background-image: url("pic/bg.jpg");
            background-repeat: no-repeat;
            background-size:cover;
        
          
        }

        label{
            color: aliceblue;
            font-size: 20px;
                
                
        }
        h1{color: azure}
                h2{color: azure}
        input[type=submit]
        {color: black;
            background-color:azure;
            border-radius: 12px;
            height: 30px;
            width: 70px;
            
         }
        
     
        

        
    
      .button {
        background-color:azure; 
        color: black; 
        border: none; 
        padding: 12px 16px; 
        font-size: 16px; 
        cursor: pointer; 
        float: right;
        margin-right: 10px; 
    border-radius: 12px;
        }

    
      .form {
        display: none; 
        margin-top: 50px;
      }

      
      .show {
        display: block;
      }
        
        
  
    </style>
      
  </head>
  
    
    <body> 
        
 
       
    <button class="button" onclick="showForm(1)">Patient</button>
    <button class="button" onclick="showForm(2)">Médecin </button>
    <button class="button" onclick="showForm(3)">Infirmier </button>
      <button class="button" onclick="showForm(4)">Laboratoire </button>

    <!-- Formulaire 1 -->
    <form action="informations.php" method="post" class="form" id="form1">
      <h1>inscription patient </h1>
    
  <label for="Nom" style="color:white">Nom:</label> 
  <input type="text" id="nom" name="nom"><br><br>

  <label for="Prenom">Prénom:</label>
  <input type="text" id="prenom" name="prenom"><br><br>

  <label for="dtn">Date de naissance:</label>
  <input type="date" id="dtn" name="dtn"><br><br>

    <label>Sexe:</label><br>
  <input type="radio" id="femme" name="sexe" value="f">
  <label for="femme">Femme</label><br>
  <input type="radio" id="homme" name="sexe" value="h">
  <label for="homme">Homme</label><br>
  
  <label for="telephone">Numéro de téléphone:</label>
  <input type="tel" id="telephone" name="telephone"><br><br>
   
        <label for="fam">Situation familiale:</label>
      <input type="radio" id="single" name="fam" value="c" required>
      <label for="single">Célibataire</label>
      <input type="radio" id="married" name="fam" value="m" required>
      <label for="married">Marié(e)</label>
        <input type="radio" id="divorce" name="fam" value="d">
  <label for="divorce">Divorcé(e)</label><br><br>

        
        <h2>Contacte urgence</h2><br>
    
  <label for="urgenceNom">Nom</label>
  <input type="text" id="urgencenom" name="urgencenom"><br><br>

  <label for="urgencePrenom"> Prénom:</label>
  <input type="text" id="urgenceprenom" name="urgenceprenom"><br><br>

  <label for="urgenceemail"> Adresse email:</label>
  <input type="email" id="urgenceemail" name="urgenceemail"><br><br>

  <label for="urgenceTelephone">Numéro de téléphone:</label>
  <input type="tel" id="urgencetelephone" name="urgencetelephone"><br><br>

  <label for="urgencerr">Relativité:</label>
  <input type="text" id="urgencerr" name="urgencerr"><br><br>
          <input type="submit" value="S'incrire">

</form>

    

    <form action="informations.php" method="post" class="form" id="form2">
      <h1>inscription médecin </h1>
     
  <label for="Nom">Nom:</label>
  <input type="text" id="nom" name="nom"><br><br>

  <label for="Prenom">Prénom:</label>
  <input type="text" id="prenom" name="prenom"><br><br>

  <label for="dtn">Date de naissance:</label>
  <input type="date" id="dtn" name="dtn"><br><br>

   <label>Sexe:</label><br>
  <input type="radio" id="femme" name="sexe" value="f">
  <label for="femme">Femme</label><br>
  <input type="radio" id="homme" name="sexe" value="h">
  <label for="homme">Homme</label><br>
                   
  <label for="Telephone">Numéro de téléphone:</label>
  <input type="tel" id="telephone" name="telephone"><br><br>

        <label for="fam">Situation familiale:</label>
      <input type="radio" id="single" name="fam" value="c" required>
      <label for="single">Célibataire</label>
      <input type="radio" id="married" name="fam" value="m" required>
      <label for="married">Marié(e)</label>
        <input type="radio" id="divorce" name="fam" value="d">
  <label for="divorce">Divorcé(e)</label><br><br>


  <label for="Spec">Spécialités:</label>
  <select id="spec" name="spec">
    <option value="ge">Médecin généraliste</option>
    <option value="pe">Médecin pédiatre</option>
    <option value="ca">Médecin cardiologue</option>
    <option value="gy">Médecin gynécologue</option>
  </select><br><br>

            <input type="submit" value="S'incrire">

</form>

    

    <form action="informations.php" method="post" class="form" id="form3">
      <h1>infirmier</h1>
    
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom" required><br><br>
      
      <label for="Prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom" required><br><br>
      
      <label for="dtn">Date de naissance:</label>
      <input type="date" id="dtn" name="dtn" required><br><br>
              
      <label>Sexe:</label><br>
  <input type="radio" id="femme" name="sexe" value="f">
  <label for="femme">Femme</label><br>
  <input type="radio" id="homme" name="sexe" value="h">
  <label for="homme">Homme</label><br>
      
      <label for="telephone">Numéro de téléphone:</label>
      <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required><br><br>
      
        <label for="fam">Situation familiale:</label>
      <input type="radio" id="single" name="fam" value="c" required>
      <label for="single">Célibataire</label>
      <input type="radio" id="married" name="fam" value="m" required>
      <label for="married">Marié(e)</label>
        <input type="radio" id="divorce" name="fam" value="d">
  <label for="divorce">Divorcé(e)</label><br><br>

      
           <input type="submit" value="S'incrire">

    </form>



        
        <form action="informations.php" method="post" class="form" id="form4">
      <h1>laboratoire</h1>
    
      <label for="nom">Nom:</label>
      <input type="text" id="nom" name="nom" required><br><br>
      
      <label for="Prenom">Prénom:</label>
      <input type="text" id="prenom" name="prenom" required><br><br>
      
      <label for="dtn">Date de naissance:</label>
      <input type="date" id="dtn" name="dtn" required><br><br>
        

 <label>Sexe:</label><br>
  <input type="radio" id="femme" name="sexe" value="f">
  <label for="femme">Femme</label><br>
  <input type="radio" id="homme" name="sexe" value="h">
  <label for="homme">Homme</label><br>
      
      <label for="Phone">Numéro de téléphone:</label>
      <input type="tel" id="telephone" name="telephone" pattern="[0-9]{10}" required><br><br>
      
             <label for="fam">Situation familiale:</label>
      <input type="radio" id="single" name="fam" value="c" required>
      <label for="single">Célibataire</label>
      <input type="radio" id="married" name="fam" value="m" required>
      <label for="married">Marié(e)</label>
        <input type="radio" id="divorce" name="fam" value="d">
  <label for="divorce">Divorcé(e)</label><br><br>


          <input type="submit" value="S'incrire">

    </form>




    <script>
      function showForm(formId) {
        const forms = document.getElementsByClassName("form");
        for (let i = 0; i < forms.length; i++) {
          forms[i].classList.remove("show");
        }

        const form = document.getElementById("form" + formId);
        form.classList.add("show");
      }
    </script>
        <a href="logout.php">Logout</a>
 
  </body>
</html>


