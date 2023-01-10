<?php
    include("../api.php");
    $id = $_POST['id'];
    $stok = $_POST['stok'];
    $intstok = intval($stok);

    $update = mysqli_query($koneksi, "UPDATE tb_warehouse SET stok='$intstok' WHERE id_barang='$id'");
    if($update){
        $pesan = "berhasil";
    }   
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
?>