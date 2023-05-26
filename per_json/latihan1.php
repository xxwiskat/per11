<?php 
    $data['NIM']= "323421125";
    $data['NAMA']= "EDLYN MAHESWARI";
    $data['JKEL']= "P";
    $data['INSTITUSI']= "UNIVERSITAS UDAYANA";
    $data['JURUSAN']= "HUKUM";
    $data['ALAMAT']= "Jl. Dukuh Indah No.48";
    $data['KENDARAAN']= "MERCEDES BENZ S-CLASS MAYBACH";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($data);
?>