<?php
    include("../api.php");
    $id = $_POST['id'];
    $transaksi = $_POST['transaksi'];
    $barang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

    if(isset($id) && ($transaksi) && ($barang) && ($jumlah) && ($harga) && ($tanggal)){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_detailtransaksi VALUES('$id','$transaksi','$barang','$jumlah','$harga','$tanggal')");
    if($tambah){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>