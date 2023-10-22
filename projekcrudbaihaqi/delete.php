<?php 

include 'koneksi.php';

$id = $_GET['id'];

$query = "DELETE FROM `tblguru` WHERE idguru = $id";

$result = mysqli_query($conn,$query);


header("location:index.php");
?>