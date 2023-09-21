<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "bimbel";

$koneksi = mysqli_connect($servername, $username, $password, $database);

if(mysqli_connect_error()){
    echo "Gagal terhubung ke server";
}

// echo "Berhasil terhubung";

?>