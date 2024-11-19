<?php

class Penggajian {
    private $bonus;
    private $gaji;

    public function Bonus($jamKerja) {
        $this->bonus = 0;
        if ($jamKerja > 8 && $jamKerja <= 12) {
            $this->bonus = ($jamKerja - 8) * 25000;
        }
        return $this->bonus;
    }

    public function Gaji($lamaKerja, $jamKerja) {
        $rate = ($lamaKerja <= 2) ? 30000 : 40000;
        $this->gaji = $jamKerja * $rate * 22;
        return $this->gaji;
    }

    public function getTotalGaji() {
        return $this->gaji + $this->bonus;
    }
}

// HTML Form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jamKerja = isset($_POST['jam_kerja']) ? intval($_POST['jam_kerja']) : 0;
    $lamaKerja = isset($_POST['lama_kerja']) ? intval($_POST['lama_kerja']) : 0;

    $payroll = new Penggajian();
    $bonus = $payroll->Bonus($jamKerja);
    $gaji = $payroll->Gaji($lamaKerja, $jamKerja);
    $totalGaji = $payroll->getTotalGaji();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaji</title>
</head>
<body>

    <h1>Gaji Kerja</h1>

    <form method="post">
        <label for="jam_kerja">Jam Kerja:</label><br>
        <input type="number" name="jam_kerja" id="jam_kerja" required>

        <label for="lama_kerja">Lama Kerja (tahun):</label>br
        <input type="number" name="lama_kerja" id="lama_kerja" required>

        <button type="submit">Hitung</button>
    </form>

    <?php if (isset($bonus) && isset($gaji) && isset($totalGaji)): ?>
        <h2>Hasil:</h2>
        <p>1. Bonus yang diterima: <?php echo $bonus; ?></p>
        <p>2. Gaji sebelum ditambah bonus: <?php echo $gaji; ?></p>
        <p>3. Gaji setelah ditambah bonus: <?php echo $totalGaji; ?></p>
    <?php endif; ?>

</body>
</html>
