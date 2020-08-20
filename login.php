<?php 
session_start();
require_once("connection.php") 
?>

    <!doctype html>
    <html>
        <!-- META TAGS -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Private Messages</title> 
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        * {margin:0px; padding:0px;}
        #container{width:300px; margin: 0px auto;}
        .input {width:90%; padding:2%; background:white!important;}
        input #user_name{background:white!important;}
    </style>


    <body>
        <h1 align="center">Login form</h1>
        <div id="container">
            <form method="post">
                <input type="text" id="user_name" placeholder="Username" name="user_name" class="input" required/><br></br>
                
                <input type="password" placeholder="Password" name="password" class="input" required/><br></br>

                <input type="submit" id="login" name="login" value="login"/>
                <a href="register.php">Register here</a>
            </form>
        </div>

        <?php
        if(isset($_POST['login'])) {
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];

            $q = "SELECT * FROM users WHERE user_name = '$user_name' AND  `password` = '$password' ";

            $r = mysqli_query($con, $q);
            if($r) {
                if(mysqli_num_rows($r) > 0){
                    $_SESSION['username'] = $user_name;
                    header("location: index.php");
                } else {
                    echo "Incorrect password or username, try again!";
                }
            } else {
                echo $q;
            }
        }
        ?>


<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
<html>