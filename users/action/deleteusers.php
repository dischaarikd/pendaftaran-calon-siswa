<?php

include '../koneksi.php';

$id_user = $_POST['id_user'];

mysqli_query($koneksi, "DELETE FROM users WHERE id_users = $id_users");

header("location:../index.php");