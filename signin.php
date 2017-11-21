<?php
    include('login.php');
    if ((isset($_SESSION['username']) != '')) {
        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">

    <title>Sign in</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="text" name="login">
        <input type="password" name="password">
        <input type="submit" name="submit" value="Login">
    </form>
    <div class="error"><?php echo $error;?></div>
</body>
</html>