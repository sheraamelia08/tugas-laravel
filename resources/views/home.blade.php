<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Shera amelia</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: linear-gradient(to bottom right, #ebd1b1, #add8e6);">

    <!-- Navbar -->
    <nav style="background: linear-gradient(to bottom right, #9ed5e7, #9a87d9);" class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Selamat Datang⋆.˚</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-5 home" href="#home-page">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#about-me">About Me</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link fs-5" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#log-in">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-5" href="#register">Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

   <section id="beranda" class="container my-5 py-5 rounded">
    <div class="row align-items-center">
        <div class="col-md-6">
            <h1 class="display-4">Selamat Datang Diperpustakaan</h1>
            <h3 class="text-muted">Perpustakaan online</h3>
            <p>“Mari temukan petualangan baru di dalam halaman buku!”. Kata-kata ini bertujuan untuk mengajak pendatang
                mengeksplorasi buku-buku menarik di perpustakaan.</p>
        </div>
        <div class="col-md-6 text-center">
            <div class="position-relative">
                <!-- Ganti URL di sini dengan URL gambar yang relevan -->
                <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794" alt="Gambar Buku" class="img-fluid rounded-circle">
                <span class="position-absolute top-50 end-0 translate-middle badge rounded-pill bg-warning"></span>
            </div>
        </div>
    </div>
</section>


    <!-- Hero Section -->
    <div class="container text-center py-5" style="background-color: #ffffff; border-radius: 30px; margin-top: 50px;">
        <h1 style="color: #6c63ff;">Membaca Buku Membuat Kita Pintar</h1>
        <p style="font-size: 1.2rem; color: #333333;">Jelajahi dokumen kami dan kenali lebih banyak tentang kami.</p>
        <a href="#portofolio" class="btn btn-primary btn-lg mt-3" style="background-color: #6c63ff; border: none;">View About Me</a>
    </div>

    <!-- Features Section -->
    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card p-4" style="background-color: #f9f9f9; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-laptop" style="font-size: 2rem; color: #6c63ff;"></i>
                    <h4 class="mt-3">Responsive Design</h4>
                    <p class="text-muted">Optimized for all screen sizes.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4" style="background-color: #f9f9f9; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-lightbulb" style="font-size: 2rem; color: #6c63ff;"></i>
                    <h4 class="mt-3">Creative Ideas</h4>
                    <p class="text-muted">Innovative and unique solutions.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card p-4" style="background-color: #f9f9f9; border: none; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <i class="bi bi-shield-lock" style="font-size: 2rem; color: #6c63ff;"></i>
                    <h4 class="mt-3">Secure Solutions</h4>
                    <p class="text-muted">Ensuring data privacy and security.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center p-4">
        <p>&copy; 2024 My Personal Website | All rights reserved.</p>
    </footer>

    <div class="container my-5">
    <h1 class="mb-4">Daftar Buku</h1>

    <!-- Tabel Daftar Buku -->
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $index => $book)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $book['title'] }}</td>
                    <td>{{ $book['author'] }}</td>
                    <td>{{ $book['year'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>


    <!-- Bootstrap JS and Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
</body>
</html>
