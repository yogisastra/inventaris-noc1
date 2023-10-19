sfp_act.php<?php 
include '../koneksi.php';
$kodesfp  = $_POST['kodesfp'];
$serialnumber = $_POST['serialnumber'];
$redaman = $_POST['redaman'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "insert into tb_sfp values (NULL,'$kodesfp ','$serialnumber','$redaman','$kondisi','$keterangan')");
header("location:data_sfp.php");
