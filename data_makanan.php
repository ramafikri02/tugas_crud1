<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Data Makanan</title>
    <style>
    .stok_merah {
        background-color: red;
        color: white;
    }

    .edit, .hapus, .tambah {
        color: white;
    }
    </style>
</head>
<body>
    <?php 
        include("koneksi.php");
        $result=mysqli_query($kon,"SELECT * FROM makanan");
    ?>

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">ID Makanan</th>
            <th scope="col">Nama Makanan</th>
            <th scope="col">Harga</th>
            <th scope="col">Satuan</th>
            <th scope="col">Kategori</th>
            <th scope="col">Gambar</th>
            <th scope="col">Stok</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php while($data=mysqli_fetch_array($result)){ ?>
        <tr>
            <td scope="row"> <?php echo $data['id_makanan'] ?> </td>
            <td> <?php echo $data['nama_makanan'] ?> </td>
            <td> <?php echo $data['harga'] ?> </td>
            <td> <?php echo $data['satuan'] ?> </td>
            <td> <?php echo $data['kategori'] ?> </td>
            <td><img src=" <?php echo $data['url_gambar'] ?>"style='width: 100px; height: 100px;' alt='Image'></td>
            <?php if($data['stok'] < 5) { ?>
            <td class="stok_merah"><?php echo $data['stok'] ?> </td>
            <?php } else { ?>
            <td><?php echo $data['stok'] ?> </td> 
            <?php } ?>
            <td>
            <button type="button" class="btn btn-primary"><a href="form_edit.php?id=<?php echo $data['id_makanan']?>" class="edit">Edit</a></button>
            <button type="button" class="btn btn-danger"><a href="proses_hapus_makanan.php?id=<?php echo $data['id_makanan']?>" class="hapus">Delete</a></button>
            </td>
        </tr>
        <?php  } ?>  
    </table>
    <center>
    <button type="button" class="btn btn-success btn-tmbh"><a href="form_input.php" class="tambah">Tambah Data</a></button>
    </center>
    <br>
    <br>
</body>
</html>