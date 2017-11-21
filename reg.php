<?php

    require('connect.php');

    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	    $email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `users` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            echo "User Created Successfully," . "now you can <a href='signin.php'>sign in</a>";
        }else{
            echo "User Registration Failed";
        }
    }
?>