<?php

include '../../koneksi.php';

$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

mysqli_query($koneksi, "
    INSERT INTO users (
        nama_user, 
        username,
        password, 
        role)
    VALUES (
        '$nama_user', 
        '$username', 
        '$password', 
        '$role');
");

header("location:../index.php");