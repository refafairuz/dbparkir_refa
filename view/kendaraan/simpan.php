<?php 

$plat_no = $_POST['plat_no'];
$id_tempat = $_POST['id_tempat'];
$waktu_masuk = $_POST['waktu_masuk'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$merk_kendaraan = $_POST['merk_kendaraan'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO kendaraan VALUES('$plat_no','$id_tempat','$waktu_masuk','$jenis_kendaraan','$merk_kendaraan')");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href=index.php</script>";
}else{
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href=tambah.php</script>";
}