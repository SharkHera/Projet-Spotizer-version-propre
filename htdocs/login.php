<?php
require_once('traitement/database.php');
session_start();

  
  if(isset($_POST['connection_user_name'])) {
    $connection_user_name = $_POST['connection_user_name'];
    $request = "SELECT * FROM user WHERE user_name = ?";
    $stmt = $conn->prepare($request);
    $stmt->execute([$connection_user_name]);
    $user = $stmt->fetch();
    if($user) {
        $_SESSION['connection_user_name'] = $connection_user_name;
        // redirect the user to another page, e.g. the home page
        header("Location: TopSons.php");
        exit();
    } else {
        echo "Invalid username";
    }
}


?>

<form method="post" action="login.php" enctype="multipart/form-data" class="login-form2 login-form">

<input type="text" name="connection_user_name" placeholder="Username">

<button type="submit">Login</button>
</form>




