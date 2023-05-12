<?php

$server = "127.0.0.1";
$userme = "root";
$pass = "";
$dbname = "mahasiswa";

$koneksi = new mysqli($server,$userme,$pass,$dbname);

if (!$koneksi){
    die("koneksi anda gagal" . $koneksi->connect_error);
}


