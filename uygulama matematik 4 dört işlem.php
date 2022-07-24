<?php

function hesap($sayi1=0,$sayi2=0,$islem=""){

    switch($islem){
        case "+":
            $sonuc = $sayi1 + $sayi2;
            $mesaj = "Toplama Sonucu: ($sayi1 + $sayi2): " .$sonuc;
        break;
        case "-":
            $sonuc = $sayi1 - $sayi2;
            $mesaj = "Çıkarma Sonucu ($sayi1 - $sayi2): " .$sonuc;
        break;
        case "*":
            $sonuc = $sayi1 * $sayi2;
            $mesaj = "Çarpma Sonucu: ($sayi1 * $sayi2): " . $sonuc;
        break;
        case "/":
            $sonuc = $sayi1 / $sayi2;
            $mesaj = "Bölme Sonucu ($sayi1 / $sayi2):" .$sonuc;
        break;
        default:
            $mesaj = "Hatalı işlem";
        break;
    }
    return $mesaj;
}

echo hesap(10,6,"*");
//echo "işlem Sonucu: " . hesap(10,6,"*");
?>