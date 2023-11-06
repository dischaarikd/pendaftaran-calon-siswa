<?php

include '../koneksi.php';

$id_calon_siswa = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM calon_siswa WHERE id_calon_siswa = $id_calon_siswa");

header("location:../index.php");