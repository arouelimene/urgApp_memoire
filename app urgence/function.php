<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "dbmem");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

function register(){
  global $conn;

  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $user_type = $_POST["type"]; 

  if(empty($username) || empty($email) || empty($password)){
    echo "Please Fill Out The Form!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Username is Already Taken";
    exit;
  }

  $email_check = mysqli_query($conn, "SELECT * FROM tb_user WHERE email = '$email'");
  if(mysqli_num_rows($email_check) > 0){
    echo "Email Already Exists";
    exit;
  }

  $query = "INSERT INTO tb_user (username, email, password, user_type) VALUES ('$username', '$email', '$password', '$user_type')";
  mysqli_query($conn, $query);

  echo "Registration Successful. You will be redirected to the app page...";
  header("Location: app.php");
  exit;
}

function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if($user === false){
    echo "Query failed: " . mysqli_error($conn);
    exit;
  }

  if(mysqli_num_rows($user) > 0){
    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      switch ($row['user_type']) {
        case 'patient':
          header("Location: patient.php");
          break;
        case 'docteur':
          header("Location: doctor.php");
          break;
        case 'laboratoire':
          header("Location: labo.php");
          break;
        case 'infirmier':
          header("Location: infirmier.php");
          break;
       default:
          echo "Invalid user type. Please contact the administrator.";
          exit;
      }

      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Wrong Password";
      exit;
    }
  }
  else{
    echo "User not registered. You will be redirected to the registration page in a few seconds...";
    header("Refresh: 3; URL=register.php");
    exit;
  }
}
?>