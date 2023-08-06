<?php
include "../config/connect.php";


//harus selalu gunakan variabel term saat memakai autocomplete,
//jika variable term tidak bisa, gunakan variabel q
$term = trim(strip_tags($_GET['term']));

$qstring = "SELECT kode_guru, nip,  nama_guru FROM guru WHERE nama_guru  LIKE '" . $term . "%'";
//query database untuk mengecek tabel anime 
$result = mysqli_query($connect, $qstring);

while ($row = mysqli_fetch_array($result)) {
    $row['value'] = htmlentities(stripslashes($row['nama_guru'] . ' | ' . $row['kode_guru'] . ' | ' . $row['nip']));
    $row['kode_guru'] = (int)$row['kode_guru'];
    //buat array yang nantinya akan di konversi ke json
    $row_set[] = $row;
}
//data hasil query yang dikirim kembali dalam format json
echo json_encode($row_set);
