<?php
    include("../api.php");
    $id = $_POST['id'];
    $level = $_POST['level'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $tipe = $_POST['tipe'];

    if($tipe=="1"){
        $update = mysqli_query($koneksi, "UPDATE tb_user SET level_user='$level', username='$username', passwd='$password' WHERE id_user='$id'");
        $pesan = "berhasil";
    }
    if($tipe=="2"){
        $hapus = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user='$id'");
        $pesan = "berhasil";
    }
    if($tipe=="3"){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_user VALUES('$id','$nama','$username','$password','$level')");
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
?>