<?php

$serverName = 'localhost'; 
$username = 'root';
$password = '';
$database = 'pendaftaran';

$koneksi = new mysqli($serverName, $username, $password, $database);

if ($koneksi->connect_error) {
    die('Koneksi database gagal' . $koneksi->connect_error);
}
