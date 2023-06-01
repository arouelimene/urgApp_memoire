<?php
include('function.php');

if (!isset($_SESSION['login']) || !$_SESSION['login']) {
    header('Location: login.php');
    exit;
}

$user = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = ".$_SESSION['id']);
$row = mysqli_fetch_assoc($user);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome <?php echo $row['username']; ?></h2>
    <a href="logout.php">Logout</a>
</body>
</html>
