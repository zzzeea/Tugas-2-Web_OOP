<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .card h2 {
            margin-top: 0;
            color: #333;
        }

        .card p {
            margin: 5px 0;
            color: #555;
            line-height: 1.5;
        }

        .card .title {
            font-weight: bold;
            color: #007BFF;
        }

        .card .info {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #e0e0e0;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Kelas Dasar
        class Mahasiswa {
            protected $nama;
            protected $nim;
            protected $jurusan;
            protected $tahunMasuk;

            public function __construct($nama, $nim, $jurusan, $tahunMasuk) {
                $this->nama = $nama;
                $this->nim = $nim;
                $this->jurusan = $jurusan;
                $this->tahunMasuk = $tahunMasuk;
            }

            public function info() {
                return "Nama: {$this->nama}, NIM: {$this->nim}, Jurusan: {$this->jurusan}, Tahun Masuk: {$this->tahunMasuk}";
            }
        }

        // Kelas Turunan: Mahasiswa S1
        class MahasiswaS1 extends Mahasiswa {
            private $skripsi;

            public function __construct($nama, $nim, $jurusan, $tahunMasuk, $skripsi) {
                parent::__construct($nama, $nim, $jurusan, $tahunMasuk);
                $this->skripsi = $skripsi;
            }

            public function info() {
                return parent::info() . ", Skripsi: {$this->skripsi}";
            }
        }

        // Kelas Turunan: Mahasiswa S2
        class MahasiswaS2 extends Mahasiswa {
            private $tugasAkhir;

            public function __construct($nama, $nim, $jurusan, $tahunMasuk, $tugasAkhir) {
                parent::__construct($nama, $nim, $jurusan, $tahunMasuk);
                $this->tugasAkhir = $tugasAkhir;
            }

            public function info() {
                return parent::info() . ", Tugas Akhir: {$this->tugasAkhir}";
            }
        }

        $mahasiswaS1 = new MahasiswaS1("Tifah", "123456", "Teknik Informatika", 2020, "Sistem Informasi Berbasis Web");
        $mahasiswaS2 = new MahasiswaS2("Zahroh", "654321", "Sistem Informasi", 2021, "Analisis Data Besar");

        echo "<div class='card'>";
        echo "<h2>Mahasiswa S1</h2>";
        echo "<div class='info'>" . $mahasiswaS1->info() . "</div>";
        echo "</div>";

        echo "<div class='card'>";
        echo "<h2>Mahasiswa S2</h2>";
        echo "<div class='info'>" . $mahasiswaS2->info() . "</div>";
        echo "</div>";
        ?>
    </div>
</body>
</html>
