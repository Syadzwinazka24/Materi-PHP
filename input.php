<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Bimbel</title>
</head>
<body>
    <h1>Form Peserta Bimbel</h1>

    <form action="crud-c.php" method="post">
        
    <label for="nim">Masukkan Nim Anda</label>
    <br>
    <input type="text" id="nim" name="nim" />
    <br>
    <!--  -->
    <label for="kd_kelas">Masukkan Kode Kelas Anda</label>
    <br>
    <input type="text" id="kd_kelas" name="kd_kelas" />
    <br>
    <!--  -->
    <label for="nama">Masukkan Nama Anda</label>
    <br>
    <input type="text" id="nama" name="nama" />
    <br>
    <!--  -->
    <label for="jenis_kelamin">Masukkan Jenis Kelamin Anda</label>
    <br>
    <input type="text" id="/jenis_kelamin" name="jenis_kelamin" />
    <br>
    <!--  -->
    <label for="kelas">Masukkan Kelas Anda</label>
    <br>
    <input type="text" id="kelas" name="kelas" />
    <br><br>

    <button type="submit">Simpan Data</button>
    </form>
</body>
</html>