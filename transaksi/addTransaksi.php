<?php
    include("../api.php");
    $id = $_POST['id'];
    $user = $_POST['user'];
    $intuser = intval($user);
    $nama = $_POST['nama'];
    $nopol = $_POST['nopol'];
    $status = $_POST['status'];
    $motor = $_POST['motor'];
    $jumlah = $_POST['jumlah'];
    $intjum = intval($jumlah);
    $date = $_POST['tanggal'];

    if(isset($id) && ($user) && ($nama) && ($nopol) && ($status) && ($motor)){
        $tambah = mysqli_query($koneksi, "INSERT INTO tb_transaksi VALUES('$id','$intuser','$nama','$motor','$nopol','$status','$intjum','$date')");
    if($tambah){
        $pesan = "berhasil";
    }
    else{
        $pesan = "gagal";
    }
    echo json_encode(array('status' => $pesan));
}
?>