<?php 
    $data[0]['NIM']= "323421125";
    $data[0]['NAMA']= "EDLYN MAHESWARI";
    $data[0]['JKEL']= "P";
    $data[0]['INSTITUSI']= "UNIVERSITAS UDAYANA";
    $data[0]['JURUSAN']= "HUKUM";
    $data[0]['ALAMAT']= "Jl. Dukuh Indah No.48";
    $data[0]['KENDARAAN']= "MERCEDES BENZ S-CLASS MAYBACH";


    $data[1]['NIM']= "234213421";
    $data[1]['NAMA']= "AGUS ARYA";
    $data[1]['JKEL']= "L";
    $data[1]['INSTITUSI']= "INSTITUT TEKNOLOGI BANDUNG";
    $data[1]['JURUSAN']= "TEKNIK INFORMATIKA";
    $data[1]['ALAMAT']= "Jl. Dukuh Indah No.48";
    $data[1]['KENDARAAN']= "NISSAN GTR R35 NISMO";


    $data[2]['NIM']= "12314212";
    $data[2]['NAMA']= "JESELYN";
    $data[2]['JKEL']= "P";
    $data[2]['INSTITUSI']= "UNIVERSITAS INDONESIA";
    $data[2]['JURUSAN']= "KEDOKTERAN";
    $data[2]['ALAMAT']= "Jl. Dukuh Indah No.48";
    $data[2]['KENDARAAN']= "BMW M4 CABRIOLETE";


    $data[3]['NIM']= "246231241";
    $data[3]['NAMA']= "EVELYN";
    $data[3]['JKEL']= "P";
    $data[3]['INSTITUSI']= "UNIVERSITAS GAJAH MADA";
    $data[3]['JURUSAN']= "EKONOMI";
    $data[3]['ALAMAT']= "Jl. Dukuh Indah No.48";
    $data[3]['KENDARAAN']= "MUSTANG SHELBY";


    $data[4]['NIM']= "12412451";
    $data[4]['NAMA']= "ANYAKAUSALYA";
    $data[4]['JKEL']= "P";
    $data[4]['INSTITUSI']= "UNIVERSITAS PADJAJARAN";
    $data[4]['JURUSAN']= "FISIP";
    $data[4]['ALAMAT']= "Jl. Dukuh Indah No.48";
    $data[4]['KENDARAAN']= "TOYOTA 86";

    header("Content-type: application/json; charset: utf-8");
    echo json_encode($data);
?>