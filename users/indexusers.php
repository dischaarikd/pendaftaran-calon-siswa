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
     <h2> USERS </h2>
    <br>
    <a href='../tambah-calon-siswa.php'>Tambah Data</a>
    <br>
    <a href="../users/action/addusers.php">Tambah User</a>
    <br><br>
    <h3> Tambah User</h3>
    <form method="post" action="users/addusers.php">
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
            </tr>
            <?php
            $no =1;
            $query = "SELECT
                        users.id_user AS id_user,
                        users.nama_user AS nama_user,
                        users.username AS username,
                        users.password AS password,
                        users.role AS role
                    FROM
                        users
                    ";
            $data = mysqli_query($koneksi,$query);
            
            while ($row = mysqli_fetch_assoc($data)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama_user'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['role'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </form>
</body>
</html>