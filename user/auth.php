<?php
    include("../api.php");
    $username = $_POST['username'];
    $password = $_POST['password'];

    $lihat = mysqli_query($koneksi, "SELECT * from tb_user WHERE username='$username' and password='$password'") or die(mysqli_error());
    $data_json = array();

    if($lihat)
    while($row = mysqli_fetch_assoc($lihat)){
        $data_json[] = $row;
    }
    echo json_encode(array('login' =>$data_json));
    ?>