<?php
    include("../api.php");
    $id = $_POST['id'];
    $status = $_POST['status'];

    if(isset($id)){
        $update = mysqli_query($koneksi, "UPDATE tb_transaksi SET status_pembayaran='$status' WHERE id_transaksi='$id'");
    if($update){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>