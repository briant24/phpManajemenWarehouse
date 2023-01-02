<?php
$user = 'root';
$password = '';
$database = 'db_warehouse';
$host = 'localhost';

$koneksi = mysqli_connect($host,$user,$password,$database) or die('Koneksi gagal');
?>