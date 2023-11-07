<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../koneksi.php';
    ?>
    <h2> TAMBAH USER BARU</h2>

    <br><br>
    <form action="../users/action/addusers.php" method="POST">
        <label for="nama_user">Nama User</label>
        <input type="text" name="nama_user" id="">

        <label for="username">Username</label>
        <input type="text" name="username" id="">

        <label for="password">Password</label>
        <input type="text" name="password" id="">

        <label>Role</label>
        <input type="radio" name="role" id="admin" value="admin">
        <label for="Admin">Admin</label>
        <input type="radio" name="role" id="user" value="user">
        <label for="usr">User</label>
        <br><br>

    <br><br>
</form>
</body>
</html>