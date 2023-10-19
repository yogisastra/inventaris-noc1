<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$kodesfp  = $_POST['kodesfp'];
$serialnumber = $_POST['serialnumber'];
$redaman = $_POST['redaman'];
$kondisi = $_POST['kondisi'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "update tb_sfp set kode_sfp='$kodesfp', serial_number='$serialnumber', redaman='$redaman', kondisi='$kondisi', keterangan='$keterangan' where id_sfp='$id'");

header("location:data_sfp.php");