<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Gaji</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Nama : </th>
                    <td><input type="text" name="nama" id="" required></td>
                </tr>
                <tr>
                    <th>Rata Rata Kerja Perhari : </th>
                    <td><input type="number" name="jamkerja" id=""></td>
                </tr>
                <tr>
                    <th>Berapa tahun anda berkerja di Perusahaan ini ? </th>
                    <td><input type="number" name="lamakerja" id="" placeholder="Berapa tahun"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Cair" name="save"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
if(isset($_POST['save'])){?>
    <fieldset>
        <legend>Output Gaji</legend>
        <table>
        <?php
    $nama = $_POST['nama'];
    $jamkerja = $_POST['jamkerja'];
    $lamakerja = $_POST['lamakerja'];

    class Gaji{
        public $nama;
        public $jamkerja;
        public $lamakerja;
        public $gaji;
        
        public function __construct($nama, $jamkerja, $lamakerja){
            $this->nama = $nama;
            $this->jamkerja = $jamkerja;
            $this->lamakerja = $lamakerja;
            $this->Bekerja(); // Panggil metode Bekerja saat membuat objek Gaji
        }

        public function Bekerja()
        {
            if($this->lamakerja >= 3){
                $totaljamkerja = $this->jamkerja * 22;
                $this->gaji = $totaljamkerja * 40000;
            } else {
                $totaljamkerja = $this->jamkerja * 22;
                $this->gaji = $totaljamkerja * 30000;
            }
        }
    }
    
    class Bonus extends Gaji{
        public $jamkerja;

        public function __construct($jamkerja){
            $this->jamkerja = $jamkerja;
            $this->Bekerja(); // Panggil metode Bekerja saat membuat objek Bonus
        }

        public function Totalbonus(){
            $bonus = 0;
            
            if($this->jamkerja > 8){
                if($this->jamkerja == 9){
                    $bonus = 25000 * 22;
                } elseif($this->jamkerja == 10){
                    $bonus = 50000 * 22;
                } elseif($this->jamkerja == 11){
                    $bonus = 75000 * 22;
                } elseif($this->jamkerja == 12){
                    $bonus = 100000 * 22;
                }
            }

            return $bonus;
        }
    }

    $a = new Gaji($nama, $jamkerja, $lamakerja);
    $b = new Bonus($jamkerja);
    
    $totalGaji = $a->gaji + $b->Totalbonus();
    ?><tr>
        <th>Nama : </th>
        <td><?php echo $a->nama;?></td>
    </tr>
    <tr>
        <th>Gaji anda : </th>
        <td>Rp.<?php echo $a->gaji;?></td>
    </tr>
    <tr>
        <th>Total Bonus : </th>
        <td>Rp.<?php echo $b->Totalbonus();?></td>
    </tr>
    <tr>
        <th>Total Gaji : </th>
        <td>Rp.<?php echo $totalGaji;?></td>
    </tr>
    </table>
    </fieldset><?php
}
?>

</body>
</html>