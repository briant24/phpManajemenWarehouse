<?php
    include("../api.php");
    $id = $_POST['id'];
    $user = $_POST['user'];
    $nama = $_POST['nama'];
    $nopol = $_POST['nopol'];
    $status = $_POST['status'];

    if(isset($id) && ($user) && ($nama) && ($nopol) && ($status)){
        $update = mysqli_query($koneksi, "UPDATE tb_transaksi SET kode_user='$user', nama_customer='$nama', nomor_polisi='$nopol', status_pembayaran='$status' WHERE id_transaksi='$id'");
    if($update){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>