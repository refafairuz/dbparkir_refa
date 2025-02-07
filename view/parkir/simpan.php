<?php 

$id_tempat = $_POST['id_tempat'];
$lokasi = $_POST['lokasi'];
$harga_parkir = $_POST['harga_parkir'];

include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO tempat_parkir VALUES('$id_tempat','$lokasi','$harga_parkir')");

if($query){
    echo "<script>alert('tambah berhasil')</script>";
    echo "<script>window.location.href=index.php</script>";
}else{
    echo "<script>alert('tambah gagal')</script>";
    echo "<script>window.location.href=tambah.php</script>";
}