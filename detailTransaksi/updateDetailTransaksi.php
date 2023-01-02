<?php
    include("../api.php");
    $id = $_POST['id'];
    $transaksi = $_POST['transaksi'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    if(isset($id) && ($transaksi) && ($barang) && ($jumlah) && ($harga) && ($tanggal)){
        $update = mysqli_query($koneksi, "UPDATE tb_detailtransaksi SET id_transaksi='$transaksi', id_barang='$barang', jumlah='$jumlah', harga='$harga', tanggal='$tanggal' WHERE id_detailtransaksi='$id'");
    if($update){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>