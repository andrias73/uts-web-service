<?php
//koneksi database
require_once('koneksi.php');

//method GET & GET by id menggunakan kondisi if else
if (empty($_GET)) {
    $sql = "SELECT * FROM layanan";
    $query = mysqli_query($koneksi, $sql);
    while ($row = mysqli_fetch_array($query)) {


        //tampung dalam data array 
        $item[] = array(
            'id' => $row['id'],
            'nama' => $row["nama"],
            'tgl' => $row["tgl"],
            'sparepart' => $row["sparepart"],
            'harga_sparepart' => $row["harga_sparepart"],
            'harga_jasa' => $row["harga_jasa"],
            'total' => $row["total"],    
            '_Links' => [
                "product : http://localhost/learnapi/mekanik.php"
            ]

        );
    }
    $response = array(
        'took' => 0.0026,
        'status' => 201,
        'data' => $item,

    );
    //membuat bentuk reponse dalam bentuk format json 
    echo json_encode($response);
} else {
    $sql = "SELECT * FROM layanan WHERE id=" . $_GET["id"];
    $query = mysqli_query($koneksi, $sql);
    //mengambil baris hasil sebagai array asosiatif (case -sensitive)
    while ($row = $query->fetch_assoc()) {


        //tampung dalam data array 
        $item[] = array(
            'id' => $row['id'],
            'nama' => $row["nama"],
            'tgl' => $row["tgl"],
            'sparepart' => $row["sparepart"],
            'harga_sparepart' => $row["harga_sparepart"],
            'harga_jasa' => $row["harga_jasa"],
            'total' => $row["total"],    
            '_Links' => [
                "product : http://localhost/learnapi/mekanik.php"
            ]

        );
    }
    $result = array(
        'took' => 0.00037,
        'status' => 201,
        'data' => $item

    );
    echo json_encode($result);
}