<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <font face="arial">
    <form action="" method="get">
    <label for="">lanjut pushup?</label>
    <input type="text" name="pushup" placeholder="ya / tidak">
    <button type="submit" name="simpan">simpan</button>
    </form>

<?php

if (isset($_GET['simpan'])) {
    $pushup = true;
    $status = $_GET['pushup'];
    while ($pushup ) {
        if ($status == "ya") {
            echo "lanjuttt...!\n";
            break;
        }elseif ($status == "tidak") {
            echo "ah cape ah\n";
            $pushup = false;
        }else {
            echo "inputan tidak valid. ketik 'ya' atau 'tidak'\n";
            break;
        }
    }
}


?>
</font>
</body>
</html>