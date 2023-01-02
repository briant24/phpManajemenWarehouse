<?php
    include("../api.php");
    $id = $_POST['id'];

    if(isset($id)){
        $hapus = mysqli_query($koneksi, "DELETE FROM tb_detailtransaksi WHERE id_detailtransaksi='$id'");
    if($hapus){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>