<?php 
echo "1. --------------", "<br>";
$array = [];
for ($i = 0; $i < 30; $i++) {
    array_push($array, rand(5, 25));
}
echo '<pre>';
print_r($array);
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
    array_push($newArray, ($array[$i] - $i));
}
echo '<pre>';
print_r($newArray);
echo '</pre>';
for ($i = 0; $i < 10; $i++) {
    array_push($newArray, rand(5, 25));
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
$pirmas = [];
$antras = [];
$trecias = [];
$abc = "ABCD";
for ($i = 0; $i < 200; $i++) {
    array_push($pirmas, $abc[rand(0, 3)]);
}
for ($i = 0; $i < 200; $i++) {
    array_push($antras, $abc[rand(0, 3)]);
}
for ($i = 0; $i < 200; $i++) {
    array_push($trecias, $abc[rand(0, 3)]);
}
$newArray = [];
for ($i = 0; $i < 200; $i++) {
    array_push($newArray, ($pirmas[$i]. $antras[$i]. $trecias[$i]));
}
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
for ($i = 0; $i < 100; $i++) {
    array_push($pirmas, rand(100, 999));
}
for ($i = 0; $i < 100; $i++) {
    array_push($antras, rand(100, 999));
}

echo '<br><br>';
?>