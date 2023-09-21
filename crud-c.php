<?php
// bgian proses input data
// nmbh data itu pke method post
// klau ambil atau liat data pke method get

include 'koneksicrud.php';

$nim = $_POST['nim'];
$kd_kelas = $_POST['kd_kelas'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "INSERT INTO kelas values ('$nim', '$kd_kelas', '$nama', '$jenis_kelamin', '$kelas')");

header("location:crud-r.php");
?>