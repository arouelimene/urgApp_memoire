<?php
include('function.php');

if (isset($_POST['action']) && $_POST['action'] == 'register') {
    register();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
    <style>
    
    body {
  background-image: url("pic/regpic.jpg");
  background-size: cover;
  background-position: center;
}

form {
  background-color: lightgray;
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border-radius: 10px;
}

h2 {
  color: #fff;
  text-align: center;
  margin-top: 50px;
    font-weight: bold
}

label {
  display: block;
  margin-bottom: 10px;
    font-size: 19px;
}

input[type="text"],
input[type="email"],
input[type="password"] {
  padding: 10px;
  width: 100%;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
  box-sizing: border-box;
}

select {
  padding: 10px;
  width: 100%;
  border-radius: 5px;
  border: none;
  margin-bottom: 20px;
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
    </style>
<body>
    <div id="popup"></div>

      <h2>Inscription</h2>
    <form method="post" action="">
      
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="type">Type utilisateur:</label>
        <select id="type" name="type">
            <option value="patient">Patient</option>
            <option value="docteur">Docteur</option>
            <option value="infirmier">Infirmier</option>
            <option value="laboratoire">Laboratoire</option>
        </select><br><br>
        
        <input type="hidden" name="action" value="register">
        <input type="submit" value="Register">
    </form>
</body>
</html>
