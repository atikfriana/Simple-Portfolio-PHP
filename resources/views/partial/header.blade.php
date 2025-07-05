<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download CV</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> <!-- Font Pacifico -->
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang */
        }
        
        .custom-btn {
            background-color: #add8e6; /* Warna biru muda */
            color: #000; /* Warna teks tombol */
            border: none; /* Menghilangkan border jika ada */
            padding: 10px 20px; /* Menambahkan padding untuk tombol */
            text-align: center; /* Mengatur teks ke tengah */
            text-decoration: none; /* Menghilangkan garis bawah */
            display: inline-block; /* Memastikan tombol ditampilkan sebagai inline-block */
            border-radius: 5px; /* Menambahkan sudut bulat */
            font-size: 16px; /* Ukuran font */
        }

        .custom-btn:hover {
            background-color: #87cefa; /* Warna biru muda lebih gelap saat hover */
        }

        .text-nama {
            font-family: 'Pacifico', cursive; /* Menggunakan font Pacifico */
            font-size: 48px; /* Ukuran font lebih besar */
            font-weight: italic; /* Menebalkan font */
            animation: typing 4s steps(30, end), blink-caret .75s step-end infinite; /* Animasi mengetik */
            white-space: nowrap; /* Mencegah teks membungkus */
            overflow: hidden; /* Menyembunyikan teks yang belum diketik */
            border-right: 4px solid black; /* Menambahkan garis di sebelah kanan untuk efek kursor */
        }

        @keyframes typing {
            from { width: 0; }
            to { width: 100%; }
        }

        @keyframes blink-caret {
            from, to { border-color: transparent; }
            50% { border-color: black; }
        }
    </style>
</head>
<body>

<section class="sec-head">
    <div class="container">
        <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-6 p-3">
                <h1 class="text-hello"></h1> 
                <h3 class="text-nama">Atika Fitria Arifiana</h3> <!-- Menambahkan nama dengan animasi -->
                <p><br>Sedang menempuh pendidikan di Universitas Brawijaya prodi Teknologi Informasi. Saya memiliki ketertarikan terhadap dunia pemrograman, desain, digital marketing.</p>
                <a href="https://drive.google.com/file/d/1Rk8g7y3GvyrmRDRdPA94kVqfU-tp1wKv/view?usp=sharing" target="blank" class="custom-btn">Download CV</a>
            </div>
            <div class="col-md-6 text-center">
                <img src="image/fotoku.png" class="fotoku shadow-lg" width="300" alt="foto">
            </div>
        </div>
    </div>
</section>

</body>
</html>
