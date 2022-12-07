<?php
// mengaktifkan session php

session_start();

// menghubungkan dengan koneksi

include '../config/koneksi.php';

$id = $_GET['id'];
$sql =  mysqli_query($koneksi, "DELETE FROM kategori WHERE id='$id'"); 
if($sql){
		header("location:kategori-list.php?pesan=Berhasil, kategori sudah dihapus");
	}else{
		header("location:kategori-list.php?pesan=Gagal, coba lagi");	
	}
?>​