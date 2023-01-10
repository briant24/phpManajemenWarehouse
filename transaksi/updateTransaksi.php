<?php
    include("../api.php");
    $id = $_POST['id'];
    $jumlah = $_POST['jumlah'];
    $intjum = intval($jumlah);

    if(isset($id) && ($jumlah)){
        $update = mysqli_query($koneksi, "UPDATE tb_transaksi SET jumlah='$intjum' WHERE id_transaksi='$id'");
    if($update){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>