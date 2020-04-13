<?php 
    include('koneksi.php');
    
    $id = $_POST['id_makanan'];
    $nama = $_POST['nama_makanan'];
    $harga = $_POST['harga'];
    $satuan = $_POST['satuan'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['url_gambar'];
    $stok = $_POST['stok'];
    
    $perintah=mysqli_query($kon, "UPDATE `makanan` SET `nama_makanan` = '$nama', `harga` = '$harga', `satuan` = '$satuan', `kategori` = '$kategori', `url_gambar` = '$gambar', `stok` = '$stok' 
    WHERE `makanan`.`id_makanan` = $id;");

    if($perintah==TRUE){
        header("Location: data_makanan.php");
    }else{
        echo "Data Gagal Di Update";
    }
?>