<?php

include '../koneksi.php';

$id_user = $_POST['id_usr'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

mysqli_query($koneksi, "
    UPDATE users SET 
        nama_user = '$nama_user',
        username = '$username',
        password = '$password',
        role = '$role'
    WHERE
        id_user = $id_user
    ");

header("location:../index.php");