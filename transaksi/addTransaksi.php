<?php
    include("../api.php");
    $id = $_POST['id'];
    $user = $_POST['user'];
    $nama = $_POST['nama'];
    $nopol = $_POST['nopol'];
    $status = $_POST['status'];

    if(isset($id) && ($user) && ($nama) && ($nopol) && ($status)){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_transaksi VALUES('$id','$user','$nama','$nopol','$status')");
    if($tambah){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>