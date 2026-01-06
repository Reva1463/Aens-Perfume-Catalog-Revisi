<?php
include 'config/koneksi.php';

$product_id = $_POST['product_id'];
$nama      = $_POST['nama_lengkap'];
$email      = $_POST['email'];
$no_hp      = $_POST['no_hp'];
$alamat     = $_POST['alamat'];
$kota       = $_POST['kota'];
$provinsi   = $_POST['provinsi'];
$kode_pos   = $_POST['kode_pos'];
$jumlah     = $_POST['jumlah'];
$metode     = $_POST['metode_pembayaran'];
$harga      = $_POST['harga'];

$total = $jumlah * $harga;

$q = mysqli_query($conn, "SELECT nama, stok FROM products WHERE id=$product_id");
$p = mysqli_fetch_assoc($q);

if ($jumlah > $p['stok']) {
    echo json_encode([
        "status" => "error",
        "message" => "Stok tidak mencukupi"
    ]);
    exit;
}

$total = $jumlah * $harga;


mysqli_query($conn, "
INSERT INTO orders (
    product_id,
    nama_lengkap,
    email,
    no_hp,
    alamat,
    kota,
    provinsi,
    kode_pos,
    jumlah,
    metode_pembayaran,
    total_harga
) VALUES (
    '$product_id',
    '$nama',
    '$email',
    '$no_hp',
    '$alamat',
    '$kota',
    '$provinsi',
    '$kode_pos',
    '$jumlah',
    '$metode',
    '$total'
)
");


mysqli_query($conn,"
UPDATE products SET stok = stok - $jumlah WHERE id=$product_id
");

echo json_encode([
    "status" => "success",
    "nama_produk" => $p['nama'],
    "jumlah" => $jumlah,
    "total" => number_format($total,0,',','.')
]);
?>
