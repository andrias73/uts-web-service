<?php
require_once('koneksi.php');

parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];

//customers ialah nama tabel 
$sql = "DELETE FROM layanan WHERE id ='$id'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00037,
        'code' => 271,
        'status' => 'Data berhasil dihapus'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00037,
        'code' => 521,
        'status' => 'Maaf input yang dimasukkan salah'
    ));
}