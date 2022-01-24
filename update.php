<?php
$nama=$_POST['nama'];
$jk=$_POST['jk'];
$alamat=$_POST['alamat'];
$hoby=$_POST['hoby'];

include_once('connection.php');

$data = mysqli_query($connect,"UPDATE tbl_siswa SET jekel='$jk',alamat='$alamat',hoby='$hoby' where namasiswa='$nama'");
 if ($data) {
   echo "<script>alert('Data Successfully');window.location.href='home.php';</script>";
 }
?>