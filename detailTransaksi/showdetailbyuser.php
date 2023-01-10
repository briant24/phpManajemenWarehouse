<?php
    include ("../api.php");
    $iduser = $_POST['idtrans'];
    
    $lihat = mysqli_query($koneksi, "SELECT tb_warehouse.nama_barang, tb_warehouse.id_barang, tb_detailtransaksi.jumlah, tb_detailtransaksi.id_transaksi, tb_detailtransaksi.id_detailtransaksi, tb_detailtransaksi.harga FROM tb_warehouse inner join tb_detailtransaksi on tb_detailtransaksi.id_barang = tb_warehouse.id_barang WHERE tb_detailtransaksi.id_transaksi = '$iduser'") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('list_item' =>$data_json));
?>