<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
</head>
<body>
    @include('partials/navbar')

    <div class="container mt-5">
        <h1>Form Tambah Produk</h1>
        <form action="#" method="#">
            <div class="row">
                <div class="col-md-4">
                    <label class="form-label" for="kode">Kode Produk</label>
                    <input class="form-control" type="text" name="kode" placeholder="Input Kode Produk">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="nama">Nama Produk</label>
                    <input class="form-control" type="text" name="nama" placeholder="Input Nama Produk">
                </div>
                <div class="col-md-4">
                    <label class="form-label" for="jenis">Jenis Produk</label>
                    <input class="form-control" type="text" name="jenis" placeholder="Input Jenis Produk">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="harga">Harga</label>
                    <input class="form-control" type="text" name="kode" placeholder="Input Harga">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success form-control" style="margin-top: 3.3vh">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>