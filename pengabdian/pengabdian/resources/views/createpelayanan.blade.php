<!-- createberita.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-a5HzfR+jK7jN7I/lO8J/zCCz3tj1SkXO0gg6D1OlPAcgnzRjhXWSl5DI9U/D6+/a" crossorigin="anonymous">

    <!-- Poppins Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <title>CMS</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #1C3881;

            width: 100%;

            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            color: white;
            /* Menambahkan efek bayangan */
        }

        .navbar-light .navbar-nav .nav-link {
            color: white !important;
        }

        .navbar-nav {
            margin-left: auto;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .custom-card {
            max-width: 500px;
            justify-content: center;

        }



        footer {
            text-align: center;
            padding: 20px;
            background-color: #f0f0f0;
            /* Adjust the background color as needed */
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light">
        <a href="{{ route('admin') }}" class="btn btn-primary">&lt; Back</a>
    </nav>
    <div class="card">
        <div class="card-body text-center">
            Kelola Pelayanan
        </div>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center"> <!-- Add justify-content-center class to center the column -->
            <div class="col-md-6 mb-4">

                <div class="card custom-card">
                    <img class="card-img-top" src="{{ asset('gambar/pelayanan.png') }}" alt="Card image cap">
                    <div class="card-body">

                        <form action="{{ route('pelayanan.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="judul" class="form-label">Nama Program</label>
                                <input type="text" name="namaprogram" class="form-control" id="namaprogram" required>
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">Diterbitkan</label>
                                <textarea name="diterbitkan" class="form-control" id="diterbitkan" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="isi" class="form-label">Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" id="deskripsi" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer style="background-color: #1C3881; color: white; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        Developed by MAR - 2024
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- Font Awesome Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2Xofz4n+fHv5uz6UnFvehxF6GlKU1MW1q5cF" crossorigin="anonymous"></script>
</body>

</html>