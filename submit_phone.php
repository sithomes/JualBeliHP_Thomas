<?php
include('connection.php');

$id = (int)$_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$query = 'INSERT INTO tbl_phone (phone_name, price) values ("'.$nama.'", "'.$harga.'")';
if($id > 0){
$query = 'UPDATE tbl_phone SET phone_name = "'.$nama.'", price = "'.$harga.'" where id= '.$id;
}
$q = mysqli_query($conn, $query) or die(mysqli_error());
if ($q) {
    echo "Sukses";
}
?>