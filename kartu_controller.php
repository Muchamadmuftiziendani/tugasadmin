<?php 


require_once __DIR__ . "/koneksi.php" ;
require_once __DIR__ . "/Model/Kartu.php" ;

// step pertama yaitu menangkap reques form
$kode = $_POST["kode"];
$nama = $_POST["nama"];
$diskon = $_POST["diskon"];
$iuran = $_POST["iuran"];

$data = [
   $kode,
   $nama,
   $diskon,
   $iuran
];

$model = new Kartu();
$tombol = $_REQUEST["proses"];

switch($tombol){
    case "simpan": $model->simpan($data); break;
    case "ubah": 
        $data[] = $_POST["idx"];
        $model->ubah($data); break;
    default:
   header("Location:index.php?url=kartu");
    break;
}

header("Location:index.php?url=kartu");

?>