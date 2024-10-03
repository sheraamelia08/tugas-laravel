<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(to right, #f0f4c3, #cfd8dc); color: #333;">
    <div class="container">
        <h2 class="my-4">Daftar Produkִֶָ࣪ ☾.</h2>
        <table class="table table-bordered table-striped" style="border: 1px solid #dee2e6;">
            <thead style="background-color: #a5d6a7;">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Product as $index => $product)
                    <tr>
                        <td>{{ $index + $Product->firstItem() }}</td>
                        <td>{{ $product->nama }}</td>
                        <td>{{ $product->stok }}</td>
                        <td>{{ $product->harga }}</td>
                        <td>{{ $product->deskripsi }}</td>
                        <td>
                            <form action="/products/{{ $product->id }}/edit" method="GET" class="d-inline">
                                <button type="submit" style="background-color: #90caf9; border: none; color: #fff;" class="btn btn-sm">Edit</button>
                            </form>
                            <form action="/products/{{ $product->id }}" method="POST" class="d-inline">
                                @csrf
                                @method("DELETE")
                                <button type="submit" style="background-color: #ef9a9a; border: none; color: #fff;" class="btn btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $Product->links() }}
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
