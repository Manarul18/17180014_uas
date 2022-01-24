<?php
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];

include_once('connection.php');
$result = mysqli_query($connect,"INSERT INTO tbl_siswa VALUES ('','$nama','$jk','$alamat','$hoby')");

 if ($result) {
   echo "<script>alert('Data Successfully');window.location.href='home.php';</script>";
 }
?>