<?php
    include ("../api.php");
    $status = $_POST['status'];

    $lihat = mysqli_query($koneksi, "SELECT tb_transaksi.id_transaksi,tb_transaksi.nama_customer,tb_transaksi.motor,tb_transaksi.nomor_polisi,tb_transaksi.status_pembayaran,tb_transaksi.jumlah,tb_transaksi.tanggal,tb_user.nama_user from tb_transaksi inner join tb_user on tb_user.id_user = tb_transaksi.id_user WHERE status_pembayaran='$status'") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('list_trans' =>$data_json));
?>  