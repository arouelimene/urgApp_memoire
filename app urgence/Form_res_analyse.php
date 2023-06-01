<!DOCTYPE html>
<html>
<head>
  <title>Entrer les Résultats d'Analyses | Laboratoire</title>
</head>
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
                    line-height: 20px;
                    font-weight: 600;
                    border-radius: 8px;
                    padding: 14px 24px;
                    border: none;
                    
                    color: #fff;
            background-color: lightseagreen;
        }
        body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg, azure, cadetblue);
  font-family: "Sansita Swashed", cursive;
}
        label {

font-family: 'Heebo', sans-serif;
font-size: 1.2rem;
font-weight: 400;
letter-spacing: 0.025rem;
font-style: normal;
text-transform: capitalize;
color: #FFFFFF;
background-color: cadetblue;
border-radius: 0.15rem;
-webkit-border-radius: 0.15rem;
-moz-border-radius: 0.15rem;
padding: 0.3rem 0.4rem;
border-style: none;
border-width: 0rem;
border-color: #EF2D56;
-webkit-box-shadow: -0.25px 0.75px 9px -0.25px rgba(85,85,85,0.36);
-moz-box-shadow: -0.25px 0.75px 9px -0.25px rgba(85,85,85,0.36);

}
</style>
<body>
  <header>
  
  </header>
  <main>
    <form method="post" action="analyses_res.php">
          <h1>Laboratoire D'annalyse Medicales</h1><br>
      <label for="nom">Nom du patient:</label>
      <input type="text" name="nom" id="nom" required><br><br>

      <label for="type">Type d'analyse:</label>
      <input type="text" name="type" id="type" required><br><br>

      <label for="norme">Norme:</label>
      <input type="text" name="norme" id="norme" required><br><br>

      <label for="resultat">Résultat:</label>
      <input type="text" name="resultat" id="resultat" required><br><br>

      <label for="commentaire">Commentaire:</label>
      <textarea name="commentaire" id="commentaire"></textarea><br><br>

      <button type="submit">Enregistrer</button>
    </form>
  </main>
</body>
</html>
