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
        $id_user = $_GET['id'];
        $query_user_by_id = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = $id_user");
        while ($edit_user = mysqli_fetch_array($query_user_by_id)) { ?>
    
    <h2> EDIT USER </h2>

    <a href="index.php">Kembali</a>
    <br><br>

    <form action="action/update.php" method="POST">
        <input type="hidden" name="id_user" value="<?php echo $id_user; ?>">

        <label for="nama_user">Nama User :</label>
        <input type="text" name="nama_user" id="" value="<?php echo $edit_user['nama_user'];?>">
        <br><br>

        <label for="username">Username :</label>
        <input type="text" name="username" id="" value="<?php echo $edit_user['username'];?>">
        <br><br>

        <label for="password">Password :</label>
        <input type="password" name="password" id="">
        <br><br>

        <label>Role :</label>
        <input type="radio" name="role" id="admin" value="admin" <?php if ($edit_user['role'] == "admin") echo "checked";?> >
        <label for="admin">Admin</label>
        <input type="radio" name="role" id="user" value="user" <?php if ($edit_user['role'] == "user") echo "checked";?> >
        <label for="user">User</label>
        <br><br>

        <input type="submit" value="Update Data">

    <br><br>
    <?php } ?>
</form>
</body>
</html>