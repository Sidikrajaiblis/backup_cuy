<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<font face="arial">
    <fieldset>
        <legend><b>Jam Kerja</b></legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Berapa jam anda ingin bekerja : </td>
                    <td><input type="number" name="jam" id=""></td>
                </tr>
                <tr>
                    <td>Berapa tahun anda ingin bekerja : </td>
                    <td><input type="number" name="tahun" id="" placeholder="Berapa tahun"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="right"><input type="submit" value="Simpan" name="save"></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php
if(isset($_POST['save'])){?>
    <br><fieldset>
        <legend><b>Gaji anda</b></legend>
        <table>
        <?php
    $jam = $_POST['jam'];
    $tahun = $_POST['tahun'];

    class Gaji{
        public $jam;
        public $tahun;
        public $gaji;
        
        public function __construct($jam, $tahun){
            $this->jam = $jam;
            $this->tahun = $tahun;
            $this->Bekerja();
        }

        public function Bekerja()
        {
            if($this->tahun >= 3){
                $totaljm = $this->jam * 22;
                $this->gaji = $totaljm * 40000;
            } else {
                $totaljm = $this->jam * 22;
                $this->gaji = $totaljm * 30000;
            }
        }
    }
    
    class Bonus extends Gaji{
        public $jam;

        public function __construct($jam){
            $this->jam = $jam;
            $this->Bekerja();
        }

        public function Totalbonus(){
            $bonus = 0;
            
            if($this->jam > 8){
                if($this->jam == 9){
                    $bonus = 25000 * 22;
                } elseif($this->jam == 10){
                    $bonus = 50000 * 22;
                } elseif($this->jam == 11){
                    $bonus = 75000 * 22;
                } elseif($this->jam == 12){
                    $bonus = 100000 * 22;
                }
            }

            return $bonus;
        }
    }

    $upi1 = new Gaji($jam, $tahun);
    $upi2 = new Bonus($jam);
    
    $totalGaji = $upi1->gaji + $upi2->Totalbonus();
    echo "Gaji anda : Rp." . $upi1->gaji;
    echo "<br>Total gaji : Rp." . $totalGaji;
    echo "<br>Bonus yang anda dapatkan : Rp." . $upi2->Totalbonus();
}
    ?>
</font>

</body>
</html>