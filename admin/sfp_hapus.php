<?php 
include '../koneksi.php';
$id = $_GET['id'];

mysqli_query($koneksi, "delete from tb_sfp where id_sfp='$id'");

/*mysqli_query($koneksi, "delete from barang_masuk where bm_id_barang='$id'");
mysqli_query($koneksi, "delete from barang_keluar where bk_id_barang='$id'");*/

header("location:data_sfp.php");
