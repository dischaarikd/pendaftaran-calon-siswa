<?php

include '../../koneksi.php';

$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$query_user_update_by_id = "UPDATE
                                users SET 
                                nama_user = '$nama_user',
                                username = '$username',
                                role = '$role'
                            WHERE
                                id_user = $id_user";

if($password != "") {
$query_user_update_by_id = "UPDATE
                                users SET 
                                nama_user = '$nama_user',
                                username = '$username',
                                password = '$password',
                                role = '$role'
                            WHERE
                                id_user = $id_user";
}

mysqli_query($koneksi, $query_user_update_by_id);

header("location:../index.php");