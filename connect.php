<?php
    $host = "localhost";
    $user = "postgetman";
    $pass = "999333";
    $db = "shop";

    $connection = mysqli_connect($host,$user,$pass,$db);

    if(!$connection){
        die("Connection failed: " . mysql_error());
    }

    mysqli_close($connection);
?>