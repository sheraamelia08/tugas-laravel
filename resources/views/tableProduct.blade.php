<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
</head>
<body>
    <h2>Daftar Produk</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Product as $product)
                <tr>
                    <td>{{ $product->nama }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->harga }}</td>
                    <td>{{ $product->deskripsi }}</td>
                    <td>
                        <form action="/products/{{ $product->id }}/edit" method="GET">
                            <button type="submit">Edit</button>
                        </form>
                        <form action="/products/{{ $product->id }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
