<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produk</title>
</head>
<body>
    @include('partials/navbar')
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <h1 class="mt-5 col">Halaman Produk</h1>
            <a href="{{ route('tambah') }}" class="btn btn-primary col-auto mt-5">Tambah Barang</a>
        </div>
        <table class="table table-info">
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Jenis Produk</th>
                <th>Harga</th>
            </tr>
                @for ($i = 0; $i < count($kode); $i++)
                    <tr>
                    <td>{{ $kode[$i] }}</td>
                    <td>{{ $nama[$i] }}</td>
                    <td>{{ $jenis[$i] }}</td>
                    <td>{{ $harga[$i] }}</td>
                @endfor
        </table>
    </div>
</body>
</html>