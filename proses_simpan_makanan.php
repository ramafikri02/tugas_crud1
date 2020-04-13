<?php 
include('koneksi.php');

$nama = $_POST{'nama_makanan'};
$harga = $_POST{'harga'};
$satuan = $_POST{'satuan'};
$kategori = $_POST{'kategori'};
$gambar = $_POST{'gambar'};
$stok = $_POST{'stok'};
// print_r($_POST);
$perintah = mysqli_query($kon, "INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga`, `satuan`, `kategori`, `url_gambar`, `stok`) 
VALUES (NULL, '$nama', '$harga', '$satuan', '$kategori', '$gambar', '$stok');");

if ($perintah==TRUE) {
    header("Location:data_makanan.php");
}
else {
    echo "Data Gagal Disimpan";
}
?>