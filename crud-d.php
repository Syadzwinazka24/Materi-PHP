<?php
include 'koneksicrud.php';

$nim = $_GET['nim'];

mysqli_query($koneksi, "DELETE FROM kelas where nim='$nim'");
mysqli_query($koneksi, "DELETE FROM bayar where nim='$nim'");
mysqli_query($koneksi, "DELETE FROM jurusan where nim='$nim'");
header("location:crud-r.php");
?>