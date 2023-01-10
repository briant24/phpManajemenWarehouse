<?php
    include ("../api.php");
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $intid = intval($id);

    $lihat = mysqli_query($koneksi, "SELECT * from tb_transaksi WHERE id_user='$intid' AND nama_customer LIKE '%$nama%'") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('list_trans' =>$data_json));
?>  