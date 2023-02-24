<?php

require_once("traitement/database.php");


if (isset($_POST['user_name'])) {
    // Sanitize and validate the user name
    $user_name = filter_var($_POST['user_name']);
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $user_name)) {
        echo "<p class='erreur'>Le pseudo ne doit contenir que des lettres, des chiffres et des tirets bas</p>";
        exit;
    }

    // Check if the user name already exists
    $checkuser = "SELECT * FROM user WHERE user_name = :user_name";
    $stmt = $conn->prepare($checkuser);
    $stmt->bindParam(':user_name', $user_name);
    $stmt->execute();
    $count = $stmt->rowCount();
    if ($count > 0) {
        echo "<div class='erreur2'>Ce pseudo n'est plus disponible</div>";
    } else {
        // Insert the user name into the database
        $insertuser = "INSERT INTO user (user_name) VALUES (:user_name)";
        $stmt = $conn->prepare($insertuser);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->execute();
        header('Location: login.php');
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CUSTOM LOGIN CSS -->
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- FAVICON -->
    

    
    <title>Register|Spotizer</title>
    
</head>

<body>

    <!-- CUSTOM CURSOR -->
    <div class="centre-img">
        <img src="css\images\Spotizer.png" alt="Logo Spotizer" class="logo">
    </div>
    <!-- LOGIN FORM -->
    <div class="login-card">
        <h2>Welcome on <span class="fancy">Spotizer</span></h2>
        <h3>Register</h3>

        <form method="post" action="index.php" enctype="multipart/form-data" class="login-form">

            <input type="text" name="user_name" placeholder="Username">
            <button type="submit">Register</button>
            
        </form>
        <h3>Already registered ?</h3>
        <div class="back-to-register">
           <a href="login.php"> <button class="register">Login</button></a>
        </div>
    </div>
    
    <!--FONTAWESOME SCRIPT-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--CURSOR SCRIPT-->

    
    
</body>
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>