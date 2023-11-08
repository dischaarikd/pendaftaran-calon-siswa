<?php

include '../koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$query_login = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

$result_login = mysqli_query($koneksi, $query_login);

if(mysqli_num_rows($result_login) == 1) {
    $user = mysqli_fetch_assoc($result_login);
    $role = $user['role'];
    $get_username = $user['username'];
    $nama_user = $user['nama_user'];

    $_SESSION['role'] = $role;
    $_SESSION['username'] = $get_username;
    $_SESSION['nama_user'] = $nama_user;

    if($role == 'admin' || $role == 'user') {
        header("location:../users");
    } else {
        echo "Anda tidak dapat mengakses halaman ini ";
    }
} else {
    echo "Username dan Password salah. Silahkan login kembali";
    header("location:../login.php");
}


?>