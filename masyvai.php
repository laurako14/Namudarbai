<?php 
echo "1. --------------", "<br>";
$array = [];
for ($i = 0; $i < 30; $i++) {
    // array_push($array, rand(5, 25));
    $array[] = rand(5, 25);
}
// foreach(range(1,30) as $val) {
//     $array[] = rand(5, 25);
// }
echo '<pre>';
_d($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "2. --------------", "<br>";
$count = 0;
$sum = 0;
$didz = 0;
for ($i = 0; $i < count($array); $i++) {
    $sum += $array[$i];
    if ($array[$i] > 10) {
        $count++;
    }
    if ($array[$i] > $didz) {
        $didz = $array[$i];
    }
}
echo "a) Didesniu uz 10 reiksmiu: $count". "<br>";
echo "b) Didziausia masyvo reiksme: $didz". "<br>";
echo "c) Visu reiksmiu suma: $sum". "<br>";
$newArray = [];
for ($i = 0; $i < count($array); $i++) {
    $newArray[] = $array[$i] - $i;
}
echo '<pre>';
print_r($newArray);
echo '</pre>';
for ($i = 0; $i < 10; $i++) {
    $newArray[] = rand(5, 25);
}
echo '<pre>';
print_r($newArray);
echo '</pre>';
$poriniai = [];
$neporiniai = [];
for ($i = 0; $i < count($newArray); $i++) {
    if ($i == 0 || $i % 2 == 0) {
        array_push($poriniai, $newArray[$i]);
    } else {
    array_push($neporiniai, $newArray[$i]);
    }
}
echo "Poriniai";
echo '<pre>';
print_r($poriniai);
echo '</pre>';
echo "Neporiniai";
echo '<pre>';
print_r($neporiniai);
echo '</pre>';
for ($i = 0; $i < count($poriniai); $i++) {
    if ($poriniai[$i] > 15) {
        $poriniai[$i] = 0;
    }
}
echo '<pre>';
print_r($poriniai);
echo '</pre>';
for ($i = 0; $i < count($poriniai); $i++) {
    if ($poriniai[$i] > 10) {
        echo "h) Didesnio uz 10 elemento indeksas: $i". "<br>";
        break;
    }
}
for ($i = 0; $i < 39; $i++) {
    if ($i == 0 || $i % 2 == 0) {
        unset($newArray[$i]);
    } 
}
echo '<pre>';
print_r($newArray);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "3. --------------", "<br>";
$array = [];
$abc = "ABCD";
for ($i = 0; $i < 200; $i++) {
    array_push($array, $abc[rand(0, 3)]);
}

echo '<pre>';
print_r(array_count_values($array));
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "4. --------------", "<br>";
sort($array);
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "5. --------------", "<br>";
$abc = "ABCD";
for ($i = 0; $i < 200; $i++) {
    $pirmas[] = $abc[rand(0, 3)];
    $antras[] = $abc[rand(0, 3)];
    $trecias[] = $abc[rand(0, 3)];
}
$newArray = [];
for ($i = 0; $i < 200; $i++) {
    array_push($newArray, ($pirmas[$i]. $antras[$i]. $trecias[$i]));
}
// echo '<pre>';
// print_r($newArray);
// echo '</pre>';
echo '<pre>';
// print_r(array_count_values($newArray));
echo "Gauta ". count(array_count_values($newArray)). " unikaliu reiksmiu kombinaciju";
echo '</pre>';

echo '<br><br>';
?>

<?php 
echo "6. --------------", "<br>";
$pirmas = [];
$antras = [];
while (count($pirmas) < 100) {
    $naujas = rand(100, 999);
    if (!in_array($naujas, $pirmas)) {
    array_push($pirmas, $naujas);
    }
}
for ($i = 0; $i < 1000; $i++) {
    $naujas = rand(100, 999);
    if (!in_array($naujas, $antras)) {
    array_push($antras, $naujas);
    }
    if (count($antras) == 100) {
        break;
    }
}
echo '<pre>';
print_r($pirmas);
echo '</pre>';
echo '<pre>';
print_r($antras);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "7. --------------", "<br>";
$unikalus = [];
for ($i = 0; $i < count($pirmas); $i++) {
    if (!in_array($pirmas[$i], $antras)) {
        array_push($unikalus, $pirmas[$i]);
    }
}
echo '<pre>';
print_r($unikalus);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "8. --------------", "<br>";
$kartojasi = [];
for ($i = 0; $i < count($pirmas); $i++) {
    if (in_array($pirmas[$i], $antras)) {
        array_push($kartojasi, $pirmas[$i]);
    }
}
echo '<pre>';
print_r($kartojasi);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "9. --------------", "<br>";
$mix = [];
for ($i = 0; $i < count($pirmas); $i++) {
    $mix[$pirmas[$i]] = $antras[$i];
}
echo '<pre>';
print_r($mix);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "10. --------------", "<br>";
$fibanaci = [];
for ($i = 0; $i < 10; $i++) {
    if ($i < 2) {
        $fibanaci[$i] = rand(5, 25);
    } else {
        $fibanaci[$i] = ($fibanaci[$i - 2] + $fibanaci[$i - 1]);
    }
}
echo '<pre>';
print_r($fibanaci);
echo '</pre>';
echo '<br><br>';
?>

<!-- <?php 
echo "11. --------------", "<br>";
$array = [];
for ($i = 0; $i < 1000; $i++) {
    $naujas = rand(0, 300);
    if (in_array($naujas, $array)) {
        continue;
    } else {
    array_push($array, $naujas);
    }
    if (count($array) == 101) {
        break;
    }
}
sort($array);
$newArray = [];
// $newArray[50] = max($array);
// echo $newArray[50];
$x = 49;
$y = 51;
for ($i = 100; $i > 0; $i--) {
    if ($i % 2 == 0) {
        $newArray[$x] = $array[$i];
        $x--;
    } 
    if ($i % 2 != 0) {
        $newArray[$y] = $array[$i];
        $y++;
    }
}
$newArray[50] = max($array);
echo '<pre>';
print_r($newArray);
echo '</pre>';
ksort($newArray);
echo '<pre>';
print_r($newArray);
echo '</pre>';
$pirmaSuma = 0;
$antraSuma = 0;
for ($i = 0; $i < 49; $i++) {
    $pirmaSuma += $newArray[$i];
}
for ($i = 51; $i < 100; $i++) {
    $antraSuma += $newArray[$i];
}
echo $pirmaSuma, "<br>", $antraSuma;
$z = 0;
while (($pirmaSuma - $antraSuma > 30 || $pirmaSuma - $antraSuma < -30) && $z < 100) {
    [$newArray[$z], $newArray[99 - $z]] = [$newArray[99 - $z], $newArray[$z]];
    $z++;
}
echo $pirmaSuma, "<br>", $antraSuma;
echo '<br><br>';
?> -->