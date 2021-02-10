<?php
echo "1. --------------", "<br>";
$name = 'Vardenis';
$surname = 'Pavardenis';
$bthd = 2000;
$currYear = date("Y");

echo "As esu $name $surname. Man yra ". ($currYear - $bthd). " metu";
echo '<br><br>';
?>

<?php
echo "2. --------------", "<br>";
$pirmas = rand(0, 4);
$antras = rand(0, 4);
echo $pirmas. '<br>'. $antras.'<br>';
if ($pirmas >= $antras && $antras != 0) {
    echo round($pirmas / $antras, 2);
} 
if ($antras > $pirmas && $pirmas != 0) {
    echo round($antras / $pirmas, 2);
}
echo '<br><br>';
?>

<?php 
echo "3. --------------", "<br>";
$pirmas = rand(0, 25);
$antras = rand(0, 25);
$trecias = rand(0, 25);
echo $pirmas. '<br>'. $antras.'<br>'.$trecias.'<br>';
echo '<br>';
if ($pirmas > $antras && $pirmas < $trecias) {
    echo "Atsakymas: " . $pirmas;
}
elseif ($antras > $pirmas && $antras < $trecias) {
    echo "Atsakymas: " . $antras;
}
elseif ($trecias > $antras && $trecias < $pirmas) {
    echo "Atsakymas: " . $trecias;
}
elseif ($pirmas < $antras && $pirmas > $trecias) {
    echo "Atsakymas: " . $pirmas;
}
elseif ($antras < $pirmas && $antras > $trecias) {
    echo "Atsakymas: " . $antras;
}
elseif ($trecias < $antras && $trecias > $pirmas) {
    echo "Atsakymas: " . $trecias;
} 
else {
    echo "Yra vienodu skaiciu";
}


echo '<br><br>';
?>

<?php
echo "4. --------------", "<br>";
$pirmaKrastine = rand(1, 10);
$antraKrastine = rand(1, 10);
$treciaKrastine = rand(1, 10);

echo $pirmaKrastine, "<br>";
echo $antraKrastine, "<br>";
echo $treciaKrastine, "<br>";

if ($pirmaKrastine + $antraKrastine >= $treciaKrastine && $pirmaKrastine + $treciaKrastine >= $antraKrastine) {
    echo "Atsakymas: true";
}
elseif ($antraKrastine + $treciaKrastine >= $pirmaKrastine && $pirmaKrastine + $treciaKrastine >= $antraKrastine) {
    echo "Atsakymas: true";
}
else {
    echo "Atsakymas: false";
}
echo "<br><br>";
?>

<?php 
echo "5. --------------", "<br>";
$pirmas = rand(0, 2);
$antras = rand(0, 2);
$trecias = rand(0, 2);
$ketvirtas = rand(0, 2);

echo $pirmas, "<br>", $antras, "<br>", $trecias, "<br>", $ketvirtas, "<br>";

$nulis = 0;
$vienas = 0;
$du = 0;
if ($pirmas == 0) {
    $nulis++;
}
if ($pirmas == 1) {
    $vienas++;
}
if ($pirmas == 2) {
    $du++;
}
if ($antras == 0) {
    $nulis++;
}
if ($antras == 1) {
    $vienas++;
}
if ($antras == 2) {
    $du++;
}
if ($trecias == 0) {
    $nulis++;
}
if ($trecias == 1) {
    $vienas++;
}
if ($trecias == 2) {
    $du++;
}
if ($ketvirtas == 0) {
    $nulis++;
}
if ($ketvirtas == 1) {
    $vienas++;
}
if ($ketvirtas == 2) {
    $du++;
}
echo "Nuliai ". $nulis. '<br>'. "Vienetai ". $vienas.'<br>'. "Dvejetai ". $du.'<br>';
echo "<br><br>";
?>

<?php 
echo "6. --------------", "<br>";
$tag = rand(1, 6);
echo "<h".$tag.">".$tag."</h".$tag.">";
echo "<br><br>";
?>

<?php 
echo "7. --------------", "<br>";
$pirmas = rand(-10, 10);
$antras = rand(-10, 10);
$trecias = rand(-10, 10);
if ($pirmas < 0) {
    echo "<p style=color:green;>".$pirmas."</p>";
}
if ($antras < 0) {
    echo "<p style=color:green;>".$antras."</p>";
}
if ($trecias < 0) {
    echo "<p style=color:green;>".$trecias."</p>";
}
if ($pirmas == 0) {
    echo "<p style=color:red;>".$pirmas."</p>";
}
if ($antras == 0) {
    echo "<p style=color:red;>".$antras."</p>";
}
if ($trecias == 0) {
    echo "<p style=color:red;>".$trecias."</p>";
}
if ($pirmas > 0) {
    echo "<p style=color:blue;>".$pirmas."</p>";
}
if ($antras > 0) {
    echo "<p style=color:blue;>".$antras."</p>";
}
if ($trecias > 0) {
    echo "<p style=color:blue;>".$trecias."</p>";
}

echo "<br><br>";
?>

<?php 
echo "8. --------------", "<br>";
$kaina = 1;
$kiekis = rand(5, 3000);
if ($kiekis > 1000 && $kiekis < 2000) {
    echo "Kiekis: ".$kiekis. "<br>"."Kaina: ".($kiekis * 0.97);
}
if ($kiekis > 2000) {
    echo "Kiekis: ".$kiekis. "<br>"."Kaina: ".($kiekis * 0.96);
}
if ($kiekis <= 1000) {
    echo "Kiekis: ".$kiekis. "<br>"."Kaina: ".($kiekis * $kaina);
}
echo "<br><br>";
?>

<?php 
echo "9. --------------", "<br>";
$pirmas = rand(0, 100);
$antras = rand(0, 100);
$trecias = rand(0, 100);
echo $pirmas. '<br>'. $antras.'<br>'.$trecias.'<br>';
echo '<br>';
$suma = $pirmas + $antras + $trecias;
$vidurkis = round($suma / 3);
echo "Pirmas vidurkis: ".$vidurkis, "<br>";
$kiekis = 0;
$suma2 = 0;
if ($pirmas > 10 && $pirmas < 90) {
    $kiekis++;
    $suma2 += $pirmas;
}
if ($antras > 10 && $antras < 90) {
    $kiekis++;
    $suma2 += $antras;
}
if ($trecias > 10 && $trecias < 90) {
    $kiekis++;
    $suma2 += $trecias;
}
if ($kiekis == 0) {
    echo "Visi skaiciai atmesti", "<br>";
} elseif ($kiekis == 3) {
    $vidurkis;
} else {
    echo "Antras vidurkis: ".round($suma2 / $kiekis), "<br>";
}

echo "<br><br>";
?>

<?php 
echo "10. --------------", "<br>";
$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
$papild = rand(0, 300);

if ($valandos < 10) {
    $valandos = sprintf("%02d", $valandos);
}
if ($minutes < 10) {
    $minutes = sprintf("%02d", $minutes);
}
if ($sekundes < 10) {
    $sekundes = sprintf("%02d", $sekundes);
}

echo $valandos, ":", $minutes, ":", $sekundes, "<br>", $papild, "<br>";
$laikas = $sekundes + ($minutes * 60) + ($valandos * 60 * 60);
$laikas += $papild;
if ($laikas >= 86399) {
    $laikas -= 86400;
}
$valandos = floor($laikas / 60 / 60);
$minutes = floor(($laikas - ($valandos * 60 * 60)) / 60);
$sekundes = ($laikas - ($valandos * 60 * 60) - ($minutes * 60));

if ($valandos < 10) {
    $valandos = sprintf("%02d", $valandos);
}
if ($minutes < 10) {
    $minutes = sprintf("%02d", $minutes);
}
if ($sekundes < 10) {
    $sekundes = sprintf("%02d", $sekundes);
}

echo $valandos, ":", $minutes, ":", $sekundes, "<br>";

echo "<br><br>";
?>

<?php 
echo "11. --------------", "<br>";
$pirmas = rand(1000, 9999);
$antras = rand(1000, 9999);
$trecias = rand(1000, 9999);
$ketvirtas = rand(1000, 9999);
$penktas = rand(1000, 9999);
$sestas = rand(1000, 9999);

echo $pirmas. '<br>'. $antras.'<br>'.$trecias.'<br>'.$ketvirtas. '<br>'. $penktas.'<br>'.$sestas.'<br>';

$didz = 0;
$didz2 = 0;
$didz3 = 0;
$didz4 = 0;
$didz5 = 0;
$didz6 = 0;

if ($pirmas > $antras) {
    $didz = $pirmas;
} else {
    $didz = $antras;
}
if ($didz < $trecias) {
    $didz = $trecias;
}
if ($didz < $ketvirtas) {
    $didz = $ketvirtas;
}
if ($didz < $penktas) {
    $didz = $penktas;
}
if ($didz < $sestas) {
    $didz = $sestas;
}
if ($didz > $pirmas) {
    $didz2 = $pirmas;
}
if ($didz > $antras && $antras > $didz2) {
    $didz2 = $antras;
} 
if ($didz > $trecias && $trecias > $didz2) {
    $didz2 = $trecias;
}
if ($didz > $ketvirtas && $ketvirtas > $didz2) {
    $didz2 = $ketvirtas;
}
if ($didz > $penktas && $penktas > $didz2) {
    $didz2 = $penktas;
}
if ($didz > $sestas && $sestas > $didz2) {
    $didz2 = $sestas;
}
if ($didz2 > $pirmas) {
    $didz3 = $pirmas;
}
if ($didz2 > $antras && $antras > $didz3) {
    $didz3 = $antras;
} 
if ($didz2 > $trecias && $trecias > $didz3) {
    $didz3 = $trecias;
}
if ($didz2 > $ketvirtas && $ketvirtas > $didz3) {
    $didz3 = $ketvirtas;
}
if ($didz2 > $penktas && $penktas > $didz3) {
    $didz3 = $penktas;
}
if ($didz2 > $sestas && $sestas > $didz3) {
    $didz3 = $sestas;
}
if ($didz3 > $pirmas) {
    $didz4 = $pirmas;
}
if ($didz3 > $antras && $antras > $didz4) {
    $didz4 = $antras;
} 
if ($didz3 > $trecias && $trecias > $didz4) {
    $didz4 = $trecias;
}
if ($didz3 > $ketvirtas && $ketvirtas > $didz4) {
    $didz4 = $ketvirtas;
}
if ($didz3 > $penktas && $penktas > $didz4) {
    $didz4 = $penktas;
}
if ($didz3 > $sestas && $sestas > $didz4) {
    $didz4 = $sestas;
}
if ($didz4 > $pirmas) {
    $didz5 = $pirmas;
}
if ($didz4 > $antras && $antras > $didz5) {
    $didz5 = $antras;
} 
if ($didz4 > $trecias && $trecias > $didz5) {
    $didz5 = $trecias;
}
if ($didz4 > $ketvirtas && $ketvirtas > $didz5) {
    $didz5 = $ketvirtas;
}
if ($didz4 > $penktas && $penktas > $didz5) {
    $didz5 = $penktas;
}
if ($didz4 > $sestas && $sestas > $didz5) {
    $didz5 = $sestas;
}
if ($didz5 > $pirmas) {
    $didz6 = $pirmas;
}
if ($didz5 > $antras && $antras > $didz6) {
    $didz6 = $antras;
} 
if ($didz5 > $trecias && $trecias > $didz6) {
    $didz6 = $trecias;
}
if ($didz5 > $ketvirtas && $ketvirtas > $didz6) {
    $didz6 = $ketvirtas;
}
if ($didz5 > $penktas && $penktas > $didz6) {
    $didz6 = $penktas;
}
if ($didz5 > $sestas && $sestas > $didz6) {
    $didz6 = $sestas;
}

echo "<br>";
echo $didz. '<br>'. $didz2.'<br>'.$didz3.'<br>'.$didz4. '<br>'. $didz5.'<br>'.$didz6.'<br>';

?>