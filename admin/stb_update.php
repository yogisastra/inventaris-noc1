<?php 
include '../koneksi.php';
$id  = $_POST['id'];
$koderoot  = $_POST['koderoot'];
$maclan = $_POST['maclan'];
$macwifi = $_POST['macwifi'];
$tanggalroot = $_POST['tanggalroot'];
$tanggalupdate = $_POST['tanggalupdate'];
$petugasroot	=$_POST['petugasroot'];
$keterangan = $_POST['keterangan'];

mysqli_query($koneksi, "update tb_stb set kode_root='$koderoot', mac_lan='$maclan', mac_wifi='$macwifi', tanggal_root='$tanggalroot', tanggal_update='$tanggalupdate', petugas_root='$petugasroot', keterangan='$keterangan' where id_root='$id'");

header("location:data_stb.php");