<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['role'])) {
        header("location:users");
    }
    ?>

    <h2> LOGIN </h2>
    <br><br>

    <form action="action/handle-login.php" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
        <br><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
        <br><br>

        <input type="submit" value="Login">

    </form>
</body>
</html>