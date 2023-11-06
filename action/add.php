<?php

include '../koneksi.php';

$nama_calon_siswa = $_POST['nama_calon_siswa'];
$jenis_kelamin_calon_siswa = $_POST['jenis_kelamin_calon_siswa'];
$asal_sekolah_calon_siswa = $_POST['asal_sekolah_calon_siswa'];
$agama_calon_siswa = $_POST['agama_calon_siswa'];

mysqli_query($koneksi, "
    INSERT INTO calon_siswa (
        nama_calon_siswa, 
        jenis_kelamin_calon_siswa,
        asal_sekolah_calon_siswa, 
        id_agama)
    VALUES (
        '$nama_calon_siswa', 
        '$jenis_kelamin_calon_siswa', 
        '$asal_sekolah_calon_siswa', 
        $agama_calon_siswa);
");

header("location:../index.php");