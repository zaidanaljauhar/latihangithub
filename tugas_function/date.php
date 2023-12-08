<?php

function 
hari_ulang_tahun($tahun,
$bulan, $tanggal) {
    //membuat timestamp dari tanggal ulang tahun menggunakan mktime
$timestamp_ulang_tahun = mktime(0,0,0, $bulan, $tanggal, $tahun);

    //mengambil nama hari dari timestamp
$hari_ulang_tahun = date("1", $timestamp_ulang_tahun);  

    return 
$hari_ulang_tahun;
}

//menentukan tanggal ulang tahun
$tanggal_ulang_tahun = 28;
$bulan_ulang_tahun = 4;
$tahun_ulang_tahun = 2002;

//menentukan tahun untuk mencari hari ulang tahun 
$tahun_target = 2030;

//memanggil fungsi untuk menemukan hari ulang tahun 
$hasil_hari_ulang_tahun = 
hari_ulang_tahun($tahun_target, $bulan_ulang_tahun, $tanggal_ulang_tahun);

echo "Hari ulang tahun pada tanggal 
$tanggal_ulang_tahun-$bulan_ulang_tahun $tahun_target adalah 
$hasil_hari_ulang_tahun.";

?>