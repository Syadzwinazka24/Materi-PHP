<?php

include 'koneksi.php';

$db = "databasephp";

$create = "CREATE database $db";

if($koneksi->query($create)=== true){
    echo "Database $db telah berhasil dibuat";
}else{
    echo "Gagal membuat databse";
}

$koneksi->close();

?>