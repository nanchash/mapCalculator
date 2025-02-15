<?php

function softmax(array $x): array {
    $max = max($x);
    $expValues = array_map(fn($v) => exp($v - $max), $x);
    $sum = array_sum($expValues);
    return array_map(fn($v) => $v / $sum, $expValues);
}

function hesaplaSkorlar(array $mahalleler, array $agirliklar): array {
    $skorlar = [];
    foreach ($mahalleler as $mahalle => $kriterler) {
        $skorlar[$mahalle] = array_sum(array_map(fn($deger, $agirlik) => $deger * $agirlik, $kriterler, $agirliklar));
    }
    return $skorlar;
}

// Kriterler
$kriterler = ["Nüfus Yoğunluğu", "Mevcut Ulaşım Altyapısı", "Maliyet Analizi", "Çevresel Etki", "Sosyal Fayda"];

// Sentetik mahalle verileri
$mahalleler = [
    "Mahalle A" => [8, 6, 7, 5, 9],
    "Mahalle B" => [6, 7, 6, 8, 7],
    "Mahalle C" => [9, 5, 8, 6, 8]
];

// Kriterlerin öncelik değerleri (sentetik)
$kriterDegerleri = [10, 7, 5, 6, 9];
$agirliklar = softmax($kriterDegerleri);

// Mahalle skorlarını hesaplama
$mahalleSkorlari = hesaplaSkorlar($mahalleler, $agirliklar);
$enUygunMahalle = array_search(max($mahalleSkorlari), $mahalleSkorlari);

// Sonuçları yazdırma
echo "Mahalle Skorları:\n";
echo"<br>";
foreach ($mahalleSkorlari as $mahalle => $skor) {
    echo "$mahalle ";
    foreach ($kriterler as $index => $kriter) {
        echo "$kriter: " . $mahalleler[$mahalle][$index] . "\n";
    }
    echo "Skor: " . number_format($skor, 2) . "\n";
    echo "<br>";
}

echo "En uygun mahalle:\n$enUygunMahalle\n";
?>  