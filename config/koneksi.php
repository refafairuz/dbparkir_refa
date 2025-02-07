<?php 

$conn = mysqli_connect('localhost', 'root', '', 'dbparkir_refa');

if(!$conn){
    die("koneksi gagal". mysqli_connect_error());
}