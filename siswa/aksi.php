<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link href="../css/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	<script type="text/javascript" src="../js/sweetalert.min.js"></script>
</head>

<body>

</body>

</html>

<?php
include "../config/connect.php";
$menu = $_GET['menu'];
$aksi = $_GET['aksi'];
if (isset($menu) and $aksi == "hapus") {
	if ($menu == "kelassiswa") {
		$menu = "datakelas";
	}
	$hapus = mysqli_query($connect, "Delete from " . $menu . " where kode_" . $menu . "='$_GET[id]'") or die("gagal" .  mysqli_error($connect));
	if ($hapus) {
		if ($menu == "datakelas") {
			$menu = "kelassiswa";
		}
		echo "<script>swal({
			title: 'Terhapus', 
			text: 'Data telah dihapus.', 
			type: 'success'
			}, 
			function(){ 
				window.location.href='index.php?menu=$menu'; 
			}); </script>";
	}
} elseif ($menu == "usersiswa" and $aksi == "edit") {
	$passwordlama  = $_POST['password1'];
	$passwordbaru1 = $_POST['password2'];
	$passwordbaru2 = $_POST['password3'];
	$kode_siswa = $_POST['kode_siswa'];
	$tampil = mysqli_query($connect, "SELECT password from siswa where kode_siswa='$kode_siswa'");
	$data = mysqli_fetch_array($tampil);
	if ($data['password'] == md5($passwordlama)) {
		$passwordbaruenkrip = md5($passwordbaru1);
		$edit = mysqli_query($connect, "Update siswa set password='$passwordbaruenkrip'
								 where kode_siswa='$kode_siswa'") or die("gagal" .  mysqli_error($connect));
		if ($edit) {
			echo "<script>swal({
			title: 'Sukses!', 
			text: 'Data telah terganti!', 
			type: 'success'
			}, 
			function(){ 
				window.location.href='index.php?menu=$menu'; 
			}); </script>";
		}
	} else {
		echo "<script>swal({
			title: 'Oops...', 
			text: 'Password lama salah!', 
			type: 'error'
			}, 
			function(){ 
				window.history.back(); 
			}); </script>";
	}
}
?>