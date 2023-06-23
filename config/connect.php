<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "raportku";

$konek=mysql_connect($host, $user, $pass);
if($konek){
	$buka=mysql_select_db($dbnm);
	if(!$buka){
		die ("Database tidak terhubung!");
	}
} else {
	die ("Server MySQL tidak terhubung!");
}
?>