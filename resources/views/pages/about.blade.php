<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">

    <title>Halaman About</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                Belajar Laravel 12
            </a>

            <div class="navbar-nav">
                <a class="nav-link" href="/">
                    Beranda
                </a>

                <a class="nav-link" href="/about">
                    Tentang Kami
                </a>
            </div>
        </div>
    </nav>

    <!-- Konten About -->
    <div class="container mt-3">
        <h1>Selamat Datang di Halaman About</h1>
        <p>Berikut adalah data diri saya:</p>

        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>{{ $nama }}</td>
            </tr>
            <tr>
                <th>Kelas</th>
                <td>{{ $kelas }}</td>
            </tr>
            <tr>
                <th>NIM</th>
                <td>{{ $nim }}</td>
            </tr>
        </table>
    </div>

</body>
</html>