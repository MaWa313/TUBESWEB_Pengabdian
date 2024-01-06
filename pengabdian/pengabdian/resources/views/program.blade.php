<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

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
            margin-top: 100px;
        }

        .custom-card {
            max-width: 500px;
            transition: transform 0.3s ease-in-out;
            margin-top: 100px;
        }

        .custom-card:hover {
            transform: scale(1.05);
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
                    <a class="nav-link" href="#">Tentang</a>
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

    <div class="container mt-4">
        <div class="card">
            <div class="card-body text-center" style="font-size: 30px;">
                Program Pelatihan Dan Pelayanan
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card custom-card" id="pelatihanCard">
                    <img class="card-img-top" src="{{ asset('gambar/coursel.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pelatihan</h5>
                        <p>Klik Menu Ini Untuk Lihat Detail Pelatihan</p>
                    </div>
                    <ul class="list-group list-group-flush">

                    </ul>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="pelatihanModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Detail Pelatihan</h5>

                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Add your modal content here -->
                                <p>

                                    Mengenai Program Pelatihan
                                    Program pelatihan pengabdian masyarakat merupakan inisiatif yang dirancang untuk memberikan pengetahuan, keterampilan, dan dukungan kepada individu atau kelompok dalam masyarakat agar mereka dapat lebih efektif dan berkontribusi secara positif kepada lingkungan sekitar. Program ini biasanya bertujuan untuk meningkatkan kapasitas dan kesejahteraan masyarakat melalui pembangunan berkelanjutan, pemberdayaan, dan pengembangan sumber daya manusia.
                                    Pengalaman Yang Akan Didapat
                                    1. Peningkatan Pengetahuan:
                                    Peserta akan mendapatkan pengetahuan baru tentang berbagai topik yang relevan dengan kebutuhan komunitas, seperti keterampilan hidup, pertanian berkelanjutan, kesehatan, atau pendidikan. Ini membantu mereka menjadi lebih terinformasi dan dapat membuat keputusan yang lebih baik.
                                    2. Peningkatan Keterampilan:
                                    Program pelatihan memberikan kesempatan untuk
                                    mengembangkan keterampilan praktis yang dapat diterapkan dalam kehidupan sehari-hari, seperti keterampilan pertanian, kewirausahaan, manajemen keuangan, atau keterampilan komunikasi.
                                    Syarat Mendaftar Program Ini</p>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary"><a style="color:white; text-decoration:none;" href="{{ route('pelatihan') }}">Cek Program</a></button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card custom-card" id="pelayananCard">
                    <img class="card-img-top" src="{{ asset('gambar/coursel.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Pelayanan</h5>
                        <p>Klik Menu Ini Untuk Lihat Detail Pelatihan</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pelayananModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Pelayanan</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Add your modal content here -->
                        <p>
                            Mengenai Pelayanan
                            Upaya atau inisiatif yang ditujukan untuk memberikan kontribusi positif kepada masyarakat atau komunitas. Program ini fokus pada penyediaan layanan yang bertujuan meningkatkan kualitas hidup dan kesejahteraan masyarakat.
                            Manfaat Yang Didapat Jika Mengikuti
                            1. Pemberdayaan Pribadi:
                            Mengikuti pelayanan dapat memberdayakan peserta dengan memberikan keterampilan, pengetahuan, dan alat yang diperlukan untuk mengatasi tantangan dalam kehidupan sehari-hari. Ini dapat meningkatkan rasa percaya diri dan kemandirian.
                            2. Keterlibatan Sosial:
                            Melalui pelayanan, peserta dapat terlibat dalam kegiatan sosial dan komunitas yang membantu membangun hubungan dengan sesama peserta, fasilitator, dan anggota masyarakat lainnya.
                            3. Pengalaman Hidup yang Bermakna:
                            Mengikuti pelayanan dapat memberikan pengalaman hidup yang bermakna dan memuaskan, terutama ketika peserta menyaksikan dampak positif dari kontribusi mereka terhadap masyarakat.
                            Syarat Mendaftar Program Ini</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary"><a style="color:white; text-decoration:none;" href="{{ route('pelayanan') }}">Cek Program</a></button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            // Using ID
            $("#pelatihanCard").click(function() {
                $("#pelatihanModal").modal("show");
            });

            $("#pelayananCard").click(function() {
                $("#pelayananModal").modal("show");
            });
        });
    </script>
</body>

</html>