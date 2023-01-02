<?php
    include("../api.php");
    $id = $_POST['id'];

    if(isset($id)){
        $hapus = mysqli_query($koneksi, "DELETE FROM tb_transaksi WHERE id_transaksi='$id'");
    if($hapus){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>