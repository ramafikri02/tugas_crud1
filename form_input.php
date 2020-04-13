<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Form Inventory</title>
</head>
<body>
    <div class="container" style="margin-top : 25px;">
        <form action="proses_simpan_makanan.php" method="post">
            <h4 style="text-align : center;">Form Input Makanan</h4>
            <div class="form-group">
            <div class="form-group">
                <label>Nama Makanan</label>
                <input type="text" class="form-control" name="nama_makanan" required>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="harga" required>
            </div>
            <div class="form-group form-row align-items-center">
                <div class="col-auto my-1">
                    <label>Satuan</label>
                    <select class="custom-select mr-sm-2" name="satuan" required>
                        <option value=".">Pilih...</option>
                        <option value="Pcs">Pcs</option>
                        <option value="Box">Box</option>
                    </select>
                </div>
                <div class="col-auto my-1">
                    <label>Kategori</label>
                    <select class="custom-select mr-sm-2" name="kategori" required>
                        <option value=".">Pilih...</option>
                        <option value="Makanan">Makanan</option>
                        <option value="Minuman">Minuman</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>URL Gambar</label>
                <input type="url" class="form-control" name="gambar" required>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" class="form-control" name="stok" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>
    </div>
</body>
</html>