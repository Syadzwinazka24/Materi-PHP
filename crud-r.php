<?php

include 'koneksicrud.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bimbel</title>
</head>
<body>
    <h1 style="text-align: center;"> Data Peserta Bimbel</h1>
    <a href="input.php">Tambahkan Data</a>
    <br><br>
    <table border="1">
        <tr>
            <th>Nim</th>
            <th>Kode Kelas</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kelas</th>
            <th>Pilihan</th>
        </tr>

        <?php
        $data = mysqli_query($koneksi, "SELECT * from kelas");
        while($bimbel = mysqli_fetch_array($data)){
            ?>

            <tr>
                <td> <?php print $bimbel['nim']; ?> </td>
                <td> <?php print $bimbel['kd_kelas']; ?> </td>
                <td> <?php print $bimbel['nama']; ?> </td>
                <td> <?php print $bimbel['jenis_kelamin']; ?> </td>
                <td> <?php print $bimbel['kelas']; ?> </td>
                <td>
                    <a href="edit.php?nim=<?php print $bimbel['nim'];?>">Edit</a>
                    <a href="crud-d.php?nim=<?php print $bimbel['nim'];?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
                </td>
            </tr>

            <?php
        }
        ?>
        
</table>
</body>
</html>