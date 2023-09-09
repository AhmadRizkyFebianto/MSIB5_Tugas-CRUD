<?php

$host = 'localhost'; //127.0.0.1
$database_name = 'mahasiswa';
$database_username = 'root';
$database_password = '';

// Membuat koneksi menuju database
$koneksi = mysqli_connect($host, $database_username, $database_password, $database_name);

if(mysqli_connect_errno()) {
	echo "Koneksi gagal : ".mysqli_connect_error();
}

?>