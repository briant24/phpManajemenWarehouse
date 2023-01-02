<?php
    include("../api.php");
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $tipe = $_POST['tipe'];

    if($tipe=="1"){
        $update = mysqli_query($koneksi, "UPDATE tb_warehouse SET nama_barang='$nama', jenis_barang='$jenis', harga_barang='$harga', stok='$stok' WHERE id_barang='$id'");
        $pesan = "berhasil";
    }
    if($tipe=="2"){
        $hapus = mysqli_query($koneksi, "DELETE FROM tb_warehouse WHERE id_barang='$id'");
        $pesan = "berhasil";
    }
    if($tipe=="3"){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_warehouse VALUES('$id','$nama','$jenis','$harga','$stok')");
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
?>