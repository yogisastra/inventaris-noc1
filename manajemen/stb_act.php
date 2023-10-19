<?php 
include '../koneksi.php';
$koderoot  = $_POST['koderoot'];
$maclan = $_POST['maclan'];
$macwifi = $_POST['macwifi'];
$tanggalroot = $_POST['tanggalroot'];
$tanggalupdate = $_POST['tanggalupdate'];
$petugasroot = $_POST['petugasroot'];
$keteranganroot = $_POST['keteranganroot'];

mysqli_query($koneksi, "insert into tb_root values (NULL,'$koderoot ','$maclan','$macwifi','$tanggalroot','$tanggalupdate','$petugasroot','$keterangan')");
header("location:data_stb.php");