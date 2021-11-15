<?php
require_once('koneksi.php');
//php tidak menyediakan fitur PUT jadi pakai parse
parse_str(file_get_contents('php://input'), $value);

$id = $value['id'];
$nama = $value['nama'];
$tgl = $value['tgl'];
$sparepart = $value['sparepart'];
$harga_sparepart = $value['harga_sparepart'];
$harga_jasa = $value['harga_jasa'];
$total = $value['total'];


//customers ialah nama tabel 
$sql = "UPDATE layanan SET  nama='$nama', tgl='$tgl', sparepart='$sparepart',harga_sparepart='$harga_sparepart',harga_jasa='$harga_jasa',total='$total' WHERE id ='$id'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00037,
        'code' => 271,
        'status' => 'Data berhasil diupdate'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00037,
        'code' => 521,
        'status' => 'Maaf input yang dimasukkan salah'
    ));
}