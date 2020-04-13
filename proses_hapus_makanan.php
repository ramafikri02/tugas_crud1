<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<?php 
include('koneksi.php');

$id = $_GET['id'];

$perintah = mysqli_query($kon, "DELETE FROM `makanan` WHERE `id_makanan` = $id");
if ($perintah==TRUE) {
    echo '<div class="alert alert-success" role="alert">
    Data berhasil di Hapus.
    <a href="data_makanan.php" class="alert-link">Klik disni</a> untuk melihat Data Baru.</div>';;
}
else {
    echo 'Data gagal dihapus';
}
?>