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

  <title>Daftar Jurnal</title>
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
      transition: transform 0.3s ease-in-out;
      margin-top: 100px;
    }

    .custom-card:hover {
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #f0f0f0;
      margin-top: 150px;
      /* Adjust the background color as needed */
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-light">

    <a class="btn btn-primary" href="{{ url('/publikasi') }}">
      < Kembali </a>


  </nav>
  <div class="card">
    <div class="card-body text-center" style="font-size: 25px; font-weight:bold;">
      Daftar Jurnal
    </div>
  </div>
  <div class="container mt-4">



    <div class="card mx-auto style=" max-width: 600px;">
      <div class="card-body" style="font-size: 15px;">
        @foreach ($newsItems as $newsItem)
        <p class="mt-4">Penulis : {{ $newsItem->namapenulis }}</p>
        <p class="card-title">Judul : {{ $newsItem->judul_jurnal }}</p>
        <p>Diterbitkan {{$newsItem->tanggalpublikasi}}</p>

        <a href="{{ route('jurnal.download', ['id' => $newsItem->id]) }}" class="btn btn-primary">Download PDF</a>
        <p>-------------------------------------------------</p>
        @endforeach
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