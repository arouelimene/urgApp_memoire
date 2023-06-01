<?php
include('function.php');

if (isset($_POST['action']) && $_POST['action'] == 'login') {
    login();
}
?>
<!DOCTYPE html>
<html>
    
   <style>
    
    body {
            background:url(pic/p2.jpg);
            background-repeat: no-repeat;
            background-size:cover;
			background-color: skyblue;
			font-family: Arial, sans-serif;
		}

		form {
			background-color: transparent;
			border-radius: 5px;
			padding: 16px;
			width: 400px;
			margin: auto;
			margin-top: 100px;
			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		input[type=text], input[type=password] {
			width: 100%;
			padding: 10px 16px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			background-color: green;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
		}

		button:hover {
			background-color: #45a049;
		}
        p{color:white}
        a{color: white}
       
       h1 {
    margin-top: 0;
           font-size: 24px; 
}
       label{font-weight: 600;
           }       
       </style>
    
    
    
<head>
    <title>Login</title>
</head>
<body>
  
    <form method="post" action="">
          <h1>Connexion</h1>
        <label>Nom utilisateur:</label>
        <input type="text"placeholder="Entrer le Nom d'utilisateur" name="username" required><br><br>
        <label>Mot de passe</label>
        <input type="password"placeholder="Entrer le mot de passe" name="password" required><br><br>
        <input type="hidden" name="action" value="login">
        <input type="submit" value="se connecter">
        <div style="text-align:center">
            <p>Pas encore inscrit ?
                <a href="register.php">Inscription</a> </p>
        </div>
    </form>
</body>
</html>
