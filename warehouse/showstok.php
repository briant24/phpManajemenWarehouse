<?php
    include ("../api.php");
    $id = $_POST['id'];
    $intid = intval($id);

    $lihat = mysqli_query($koneksi, "SELECT stok from tb_warehouse WHERE id_barang='$intid'") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('show_stok' =>$data_json));
?>