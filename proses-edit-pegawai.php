<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$email = $_POST['email'];
	$jabatan = $_POST['jabatan'];
	$telepon = $_POST['telepon'];
	
	// buat query update
	$sql = "UPDATE pegawai SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', email='$email', jabatan='$jabatan', telepon='$telepon' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-pegawai.php
		header('Location: list-pegawai.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>