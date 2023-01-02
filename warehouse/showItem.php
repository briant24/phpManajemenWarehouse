<?php
    include ("../api.php");

    $lihat = mysqli_query($koneksi, "SELECT * from tb_warehouse") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('list_item' =>$data_json));
?>