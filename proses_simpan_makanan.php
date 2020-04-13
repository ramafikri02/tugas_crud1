<?php 
include('koneksi.php');

$nama = $_POST{'nama_makanan'};
$harga = $_POST{'harga'};
$satuan = $_POST{'satuan'};
$kategori = $_POST{'kategori'};
$gambar = $_POST{'gambar'};
$stok = $_POST{'stok'};

$cari_id = mysqli_query($kon, "SELECT * from makanan order by id_makanan DESC LIMIT 0,1");
$i = mysqli_fetch_array($cari_id);
$id_awal = (int) ($i['id_makanan'])+1;

$perintah = mysqli_query($kon, "INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `harga`, `satuan`, `kategori`, `url_gambar`, `stok`) 
VALUES ('$id_awal', '$nama', '$harga', '$satuan', '$kategori', '$gambar', '$stok');");

if ($perintah==TRUE) {
    header("Location:data_makanan.php");
}
else {
    echo "Data Gagal Disimpan";
}
?>
