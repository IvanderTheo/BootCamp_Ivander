<?php
    echo "test";
    $harga= 75000;
    $jumlahBuku = 3;
    $total = ($harga * $jumlahBuku) * 1.1;
    echo "";
    echo "total yang harus dibayar: Rp.$total";
    if($harga>$jumlahBuku) {
        echo "$harga";
    } else {
        echo "$jumlahBuku";
    }
    $cuaca = "dingin";
    $isLogin = false;
    $isHuman = false;

    // && -> AND -> all true
    // || -> OR -> salah satu true

   if($isLogin && !$isHuman){
        if($cuaca == "hujan"){
            echo "Bawa payung!";
        } elseif($cuaca == "dingin"){
            echo "Bawa Jaket!";
        } else {
            echo "Tidak perlu bawa payung!";
        }
   } else {
    echo "Silahkan login terlebih dahulu!";
   }

   $hari = "Sabtu";

   switch($hari){
    case "Senin":
        echo "Hari masuk Kerja";
        break;
    case "Sabtu":
        echo "Hari Libur";
        break;
    default:
        echo "Hari Cuti";
        break;
   };

   $status = $isLogin ? "Selamat Datang!" : "Silahkan Login!";
   echo $status;
?>