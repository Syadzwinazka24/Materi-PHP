<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "databasephp";

$koneksi = new mysqli($servername, $username, $password, $db);

if($koneksi->connect_error){
    die("Gagal Terkoneksi" . $koneksi->connect_error);
}


$create = "CREATE table guru (
    id int(20) primary key,
    nama varchar(50),
    alamat varchar(25),
    no_telp varchar(14),
    j_klmn enum('L', 'P')
    )";

    if($koneksi->query($create)=== true){
        echo "Tabel berhasil dibuat";
    }else{
        echo "gagal";
    }

    $koneksi->close();
?>