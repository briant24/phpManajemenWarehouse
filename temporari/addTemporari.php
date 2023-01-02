<?php
    include("../api.php");
    $id = $_POST['id'];
    $iddetail = $_POST['detail'];
    $idtransaksi = $_POST['transaksi'];
    $idbarang = $_POST['barang'];
    $jumlah = $_POST['jumlah'];

    if(isset($id) && ($iddetail) && ($idtransaksi) && ($idbarang) && ($jumlah)){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_temporari VALUES('$id','$iddetail','$idtransaksi','$idbarang','$jumlah')");
    if($tambah){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>