<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>OOP Aritmatika</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <th>Bill 1</th>
                    <td><input type="text" name="bill1" id=""></td>
                </tr>
                <tr>
                    <th>Bill 2</th>
                    <td><input type="text" name="bill2" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"> <button>Reset</button></td>
                </tr>
            </table>
            <?php
    if (isset($_POST['simpan'])){
        $bill1 = $_POST['bill1'];
        $bill2 = $_POST['bill2'];
    

class Aritmatika{
    public $upi1;
    public $upi2;

    public function __construct($a, $b)
    {
        $this->upi1 = $a;
        $this->upi2 = $b;
    }
    public function Penjumlahan()
    {
        $hasil = $this->upi1 + $this->upi2;
        return $hasil;
    }
    
    public function Pengurangan()
    {
        $hasil = $this->upi1 - $this->upi2;
        return $hasil;
    }

    public function Perkalian()
    {
        $hasil = $this->upi1 * $this->upi2;
        return $hasil;
    }

    public function Pembagian()
    {
        $hasil = $this->upi1 / $this->upi2;
        return $hasil;
    }

    public function Modulus()
    {
        $hasil = $this->upi1 % $this->upi2;
        return $hasil;
    }
}

$jumlah = new Aritmatika($bill1, $bill2);
echo "Penjumlahan : " . $jumlah->Penjumlahan() . "<br>";
echo "Pengurangan : " . $jumlah->Pengurangan() . "<br>";
echo "Perkalian : " . $jumlah->Perkalian() . "<br>";
echo "Pembagian : " . $jumlah->Pembagian() . "<br>";
echo "Modulus : " . $jumlah->Modulus() . "<br>";}
?>
        </form>
    </fieldset>
</body>
</html>
