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
        echo "<div class='erreur'>Invalid username</div>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Login|Spotizer</title>
</head>
<body>
    
    <div class="centre-img">
        <img src="css\images\Spotizer.png" alt="Logo Spotizer" class="logo">
    </div>
    
    <div class="login-card">
        <h2>Welcome on <span class="fancy">Spotizer</span></h2>
        <h3>Login</h3>
        
        <form method="post" action="login.php" enctype="multipart/form-data" class="login-form">
            
            <input type="text" name="connection_user_name" placeholder="Username">
            <button type="submit">Login</button>
            
        </form>
        
        <div class="back-to-register">
            <a href="index.php"><button class="register">Register</button></a>
        </div>
    </div>
    
</body>
</html>

<!-- <form method="post" action="login.php" enctype="multipart/form-data" class="login-form2 login-form">

<input type="text" name="connection_user_name" placeholder="Username">

<button type="submit">Login</button>
</form> -->


