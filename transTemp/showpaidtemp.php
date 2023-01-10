<?php
    include ("../api.php");
    $iduser = $_POST['idtransaksi'];
    $lihat = mysqli_query($koneksi, "SELECT SUM(tb_warehouse.harga_barang) as jumlah FROM tb_warehouse inner join tb_detailtransaksi on tb_detailtransaksi.id_barang = tb_warehouse.id_barang WHERE tb_detailtransaksi.id_transaksi = '$iduser'") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('jumlah_smt' =>$data_json));
?>