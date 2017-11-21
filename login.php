<?php
    session_start();
    include('connect.php');

    $error = '';
    
    if(isset($_POST['submit'])){
        if(empty($_POST['login']) || empty($_POST["password"])){
            $error = "Both fields are required.";
        }else{
            $username=$_POST['login'];
            $password=$_POST['password'];

            $sql="SELECT id FROM users WHERE username='$username' and password='$password'";
            $result=mysqli_query($connection,$sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

            if(mysqli_num_rows($result) == 1){
                $login_user = $_SESSION['username'];
            
                header("location: home.php");
            }else{
                $error = "Incorrect username or password";
            }
        }
    }
?>