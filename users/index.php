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
    session_start();
    if($_SESSION['role'] == '') {
    header("location:../login.php"); 
    }
?>
     <h2> DATA USERS </h2>
    <br>
    <a href="tambah-user.php">Tambah User</a>
    <a href="../logout.php">Logout</a>
    <br><br>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Password</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            <?php
            $no =1;
            $query_index_user = "SELECT
                        users.id_user AS id_user,
                        users.nama_user AS nama_user,
                        users.username AS username,
                        users.password AS password,
                        users.role AS role
                    FROM
                        users
                    ";
            $data_users = mysqli_query($koneksi,$query_index_user);
            
            while ($data_user = mysqli_fetch_assoc($data_users)) { ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $data_user['nama_user']; ?></td>
                    <td><?php echo $data_user['username']; ?></td>
                    <td><?php echo $data_user['password']; ?></td>
                    <td><?php echo $data_user['role']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $data_user['id_user'];?>">EDIT</a>
                        <?php if($_SESSION['role'] == 'admin') { ?>
                        <a href="action/delete.php?id=<?php echo $data_user['id_user'];?>">DELETE</a>
                        <?php } ?>
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </form>
</body>
</html>