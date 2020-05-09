<?php
include 'connection.php';

$id = (int)$_POST['id'];
$query = 'DELETE from tbl_phone WHERE id = '.$id;
$result = mysqli_query($conn, $query) or die(mysqli_error());
if(mysqli_affected_rows() > 0){
echo 'Delete Data Success';
}else{
echo '';
}
?>