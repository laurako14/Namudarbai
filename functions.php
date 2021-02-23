<?php 
echo "1. --------------", "<br>";
function insert($text) {
    echo "<h1>$text</h1>";
}

insert("Labas");
echo '<br><br>';
?>

<?php 
echo "2. --------------", "<br>";
function insert2($text, $tag) {
    echo "<h$tag>$text</h$tag>";
}

insert2("Ku ku", "4");
echo '<br><br>';
?>

<?php 
echo "3. --------------", "<br>";
function randomString() {
$x = md5(time());
echo $x;
echo '<br><br>';
$y = 0;
$bla = '';
for ($i = 0; $i < mb_strlen($x); $i++) {
    if (is_numeric($x[$i])) {
        while (is_numeric($x[$i])) {
            $bla .= $x[$i];
            $i++;
        }
        insert($bla);
        $bla = '';
    }
}
}
randomString();
echo '<br><br>';
?>

<?php 
echo "4. --------------", "<br>";
function wholeNo(int $int) {
    $count = 0;
for ($i = 2; $i < $int; $i++) {
    if ($int % $i == 0) {
        $count++;
    }
}
return $count;
}
echo wholeNo(54);
echo '<br><br>';
?>

<?php 
echo "5. --------------", "<br>";
for ($i = 0; $i < 100; $i++) {
    $array[] = rand(33, 77);
}
echo '<pre>';
print_r($array);
echo '</pre>';
function rus($a, $b) {
    return wholeNo($b) <=> wholeNo($a);
}
usort($array, 'rus');
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "6. --------------", "<br>";
for ($i = 0; $i < 100; $i++) {
    $array2[] = rand(333, 777);
}
echo '<pre>';
print_r($array2);
echo '</pre>';
$ilgis = count($array2);
for ($i = 0; $i < $ilgis; $i++) {
    if (wholeNo($array2[$i]) == 0) {
        unset($array2[$i]);
    }
}
echo '<pre>';
print_r($array2);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "7. --------------", "<br>";
function randomLength($int) {
    $length = rand(10, 20);
    for ($i=0; $i < $length; $i++) {
        if ($i < $length - 1) {
            $randomArray[$i] = rand(0, 10);
        } else {
            if ($int > 0) {
                // u$randomArray[$i] = [];
                $randomArray[$i][] = randomLength($int - 1);
            } else {
                $randomArray[] = 0;
            }
        }
    }
    return $randomArray;
}
$ats = randomLength(rand(10, 30));
echo '<pre>';
print_r($ats);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "8. --------------", "<br>";
function suma($input) {
    $sum = 0;
    foreach ($input as $value) {
        if (is_numeric($value)) {
            $sum += $value;
        } else {
            $sum += suma($value);
        }
    }
    return $sum;
}
echo suma($ats);
echo '<br><br>';
?>

<?php 
echo "9. --------------", "<br>";
for ($i = 0; $i < 3; $i++) {
    $masyvas[] = rand(1, 33);
}
function pirminis($int) {
    for ($i = 2; $i < $int; $i++) {
        if ($int % $i == 0) {
            return false;
        }
    }
    return true;
}
$count = 0;
while ($count < 3) {
    $count = 0;
    for ($i = count($masyvas) - 1; $i > (count($masyvas) - 4); $i--) {
        if (!pirminis($masyvas[$i])) {
            $masyvas[] = rand(1, 33);
            break;
        } else {
            $count++;
        }
    }
}
echo '<pre>';
print_r($masyvas);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "10. --------------", "<br>";
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = [];
    for ($j = 0; $j < 10; $j++) {
    array_push($array[$i], rand(1, 100));
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';

function vidurkis ($input) {
$suma = 0;
$count = 0;
foreach ($input as $value) {
    foreach ($value as $_) {
        if (pirminis($_)) {
            $suma += $_;
            $count++;
        }
    }
}
return $suma / $count;
}

echo vidurkis($array);
echo '<br><br>';

function maziausias ($input) {
    $maziausias = 101;
    foreach ($input as $value) {
        foreach ($value as $val) {
                if ($val < $maziausias) {
                    $maziausias = $val;
                }
            }
        }
        return $maziausias;
}
$x = maziausias($array);
// while (vidurkis($array) < 70) {
// foreach ($array as $value) {
//     foreach ($value as $val) {
//         if ($val == $x) {
//             $val = $x + 3;
//             echo $val.'<br>';
//             break 2;
//         }
//     }
// $x = maziausias($array);
// }
// echo vidurkis($array);
// echo '<br><br>';
// }

while (vidurkis($array) < 70) {
    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 10; $j++) {
            if ($array[$i][$j] == $x) {
                $array[$i][$j] = $x + 3;
                break 2;
            }
        }
    }
    $x = maziausias($array);
    }
echo '<br><br>';
echo vidurkis($array);
echo '<br><br>';
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "11. --------------", "<br>";
// $length = rand(10, 100);
// for ($i = 0; $i < $length; $i++) {
//     $x = rand(0,2);
//     if ()
//     $array11[] = rand(0, 1);
//     for ($j = 0; $j < 10; $j++) {
        
//     }
// }
echo '<br><br>';
?>