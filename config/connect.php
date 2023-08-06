<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "raportku";




$connect = mysqli_connect($host, $user, $pass, $dbnm);
if (!$connect) {
	echo "Database connection error" . mysqli_connect_error();
}
