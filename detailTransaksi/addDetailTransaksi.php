<?php
    include("../api.php");
    $id = $_POST['id'];
    $transaksi = $_POST['transaksi'];
    $barang = $_POST['barang'];
    $intbarang = intval($barang);
    $jumlah = $_POST['jumlah'];
    $intjumlah = intval($jumlah);
    $harga = $_POST['harga'];

    if(isset($id) && ($transaksi) && ($barang) && ($jumlah) && ($harga)){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_detailtransaksi VALUES('$id','$transaksi','$intbarang','$intjumlah','$harga')");
    if($tambah){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>