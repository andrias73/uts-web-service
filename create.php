<?php
require_once('koneksi.php');

$nama = $_POST['nama'];
$tgl = $_POST['tgl'];
$sparepart = $_POST['sparepart'];
$harga_sparepart = $_POST['harga_sparepart'];
$harga_jasa = $_POST['harga_jasa'];
$total = $_POST['total'];

$sql = "INSERT INTO layanan (nama,tgl,sparepart,harga_sparepart,harga_jasa,total) VALUES ('$nama','$tgl','$sparepart','$harga_sparepart','$harga_jasa','$total')";
$query = mysqli_query($koneksi, $sql);
if ($query) {
    echo json_encode(array(
        'took' => 0.00037,
        'code' => 271,
        'status' => 'Data berhasil dimasukkan'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00037,
        'code' => 521,
        'status' => 'Maaf input yang dimasukkan salah'
    ));
}