<?php

//get -> datanya ada di url jg
// $bunga = $_GET['nama'];
// echo "nama bunga yang saya punya adl " . $bunga;

// post -> datanya gk ada di url
$bunga = $_POST['nama'];
echo "nama bunga yang saya punya adl " . $bunga;

?>

<form action="getpost.php" method="post">
    <input type="text" name="nama"/>
    <input type="submit"/>
</form>

crud ( create, )
