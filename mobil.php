<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Mobil</title>
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
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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
    </style>
</head>
<body>
    <div class="container">
        <?php
        // Kelas dasar Mobil
        class Mobil {
            public $nama;
            public $merk;

            public function __construct($nama, $merk) {
                $this->nama = $nama;
                $this->merk = $merk;
            }

            public function cetakInfo() {
                echo "<p>Nama: {$this->nama}, Merk: {$this->merk}</p>";
            }
        }

        // Kelas turunan : SportCar
        class SportCar extends Mobil {
            public $speed;

            public function __construct($nama, $merk, $speed) {
                parent::__construct($nama, $merk);
                $this->speed = $speed;
            }

            public function turbo() {
                echo "<p class='action'>{$this->nama} mengaktifkan turbo! Kecepatan meningkat ke " . ($this->speed + 50) . " km/jam</p>";
            }
        }

        // Kelas turunan : CityCar
        class CityCar extends Mobil {
            public $model;

            public function __construct($nama, $merk, $model) {
                parent::__construct($nama, $merk);
                $this->model = $model;
            }

            public function irit() {
                echo "<p class='action'>{$this->nama} adalah model {$this->model} yang irit bahan bakar</p>";
            }

            public function sensor() {
                echo "<p class='action'>{$this->nama} menggunakan sensor parkir otomatis</p>";
            }
        }

        $mobil1 = new SportCar("Ferrari", "Ferrari", 320);
        $mobil2 = new CityCar("Toyota Prius", "Toyota", "Prius");

        echo "<div class='card'>";
        echo "<h2>SportCar</h2>";
        $mobil1->cetakInfo();
        $mobil1->turbo();
        echo "</div>";

        echo "<div class='card'>";
        echo "<h2>CityCar</h2>";
        $mobil2->cetakInfo();
        $mobil2->irit();
        $mobil2->sensor();
        echo "</div>";
        ?>
    </div>
</body>
</html>
