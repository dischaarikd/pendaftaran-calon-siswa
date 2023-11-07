<?php

include '../../koneksi.php';

$id_user = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM users WHERE id_user = $id_user");

header("location:../index.php");