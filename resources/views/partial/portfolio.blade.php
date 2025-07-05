<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangkit UMKM</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* CSS untuk tombol Next dan Previous berwarna biru muda */
        .carousel-control-next,
        .carousel-control-prev {
            background-color: #add8e6; /* Warna biru muda */
            width: 30px; /* Ukuran tombol lebih kecil */
            height: 30px; /* Ukuran tombol lebih kecil */
            border-radius: 50%; /* Membuat tombol bulat */
            opacity: 0.8;
        }

        .carousel-control-next:hover,
        .carousel-control-prev:hover {
            opacity: 1;
        }

        .carousel-control-next-icon,
        .carousel-control-prev-icon {
            filter: invert(1); /* Membuat ikon menjadi putih */
        }
    </style>
</head>
<body>
    <section id="portofolio" class="sec-porto">
        <div class="container">
            <h3>Portofolio</h3>
            <div id="carouselExampleAutoplaying" class="carousel slide pt-4" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md text-center">
                                <img src="image/website.png" width="350" alt="portofolio">
                            </div>
                            <div class="col p-4">
                                <h4>Website Gelora UMKM</h4>
                                <p>
                                    Website ini dibuat untuk mendukung kebutuhan UMKM di seluruh Indonesia melalui 
                                    platform Bangkit UMKM. Website ini terdiri dari home, tentang, layanan, berita, dan kontak.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md text-center">
                                <img src="image/sosmed.png" width="350" alt="...">
                            </div>
                            <div class="col p-4">
                                <h4>Pengelolaan Sosial Media</h4>
                                <p>
                                    Mengelola media sosial Your Holiday Services in Bali, menampilkan konten promosi 
                                    dan layanan terbaik untuk membantu wisatawan menikmati liburan tanpa repot.
                                    Jelajahi Bali dengan mudah dan nyaman.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Previous -->
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <!-- Tombol Next -->
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
