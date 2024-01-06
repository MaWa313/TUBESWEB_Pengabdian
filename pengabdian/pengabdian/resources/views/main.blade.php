<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Web Pengabdian</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background-color: #1C3881;
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
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


        footer {

            text-align: center;
            padding: 20px;
            background-color: #f0f0f0;
            color: black;
            margin-top: auto;
            margin-top: 100px;

            /* Adjust the background color as needed */
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('gambar/logo.png') }}" alt="Logo" width="55">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/main') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/program') }}">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/publikasi') }}">Publikasi</a>
                </li>
                <li class="nav-item">

                    <a class="nav-link" href="{{ url('/sk') }}">Tentang</a>
                </li>
            </ul>
        </div>
    </nav>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 img-fluid" src="{{ asset('gambar/coursel.png') }}" alt="First slide" style="max-width: 1680px; height: auto;">
                </div>


            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <div class="container">
        <h1 class="mt-4 text-center" style="font-size: 30px;">Berita Pengabdian Terbaru</h1>
        <div class="row mt-4">
            @foreach ($newsItems as $newsItem)
            <div class="col-md-4 mb-4">
                <div class="card mx-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $newsItem->gambar) }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $newsItem->judul }}</h5>
                        <p class="card-text">{{ $newsItem->isi }}</p>
                    </div>
                </div>
            </div>
            @endforeach
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
</body>

</html>