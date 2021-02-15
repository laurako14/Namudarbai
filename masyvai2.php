<?php 
echo "1. --------------", "<br>";
$array = [];
for ($i = 0; $i < 10; $i++) {
    $array[$i] = [];
    for ($j = 0; $j < 5; $j++) {
    array_push($array[$i], rand(5, 25));
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "2. --------------", "<br>";
$didziausias = 0;
$did10 = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($array[$i][$j] > 10) {
            $did10++;
        }
    }
}
echo "a) $did10";
echo '<br><br>';

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($array[$i][$j] > $didziausias) {
            $didziausias = $array[$i][$j];
        }
    }
}
echo "b) $didziausias";
echo '<br><br>';
$sum0 = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 1; $j++) {
        $sum0 += $array[$i][$j];
    }
}

$sum1 = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 1; $j < 2; $j++) {
        $sum1 += $array[$i][$j];
    }
}

$sum2 = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 2; $j < 3; $j++) {
        $sum2 += $array[$i][$j];
    }
}

$sum3 = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 3; $j < 4; $j++) {
        $sum3 += $array[$i][$j];
    }
}

$sum4 = 0;
for ($i = 0; $i < 10; $i++) {
    for ($j = 4; $j < 5; $j++) {
        $sum4 += $array[$i][$j];
    }
}
echo "c) indeksas 0: $sum0, indeksas 1: $sum1, indeksas 2: $sum2, indeksas 3: $sum3, indeksas 4: $sum4";
echo '<br><br>';

for ($i = 0; $i < 10; $i++) {
    for ($j = 5; $j < 7; $j++) {
    array_push($array[$i], rand(5, 25));
    }
}
echo 'd)';
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

$newArray = [];
for ($i = 0; $i < 10; $i++) {
    array_push($newArray, array_sum($array[$i]));
}

echo 'e)';
echo '<pre>';
print_r($newArray);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "3. --------------", "<br>";
$array = [];
$a_z = "abcdefghijklmnoprstuvzABCDEFGHIJKLMNOPRSTUVZ";
for ($i = 0; $i < 10; $i++) {
    $array[$i] = [];
    $length = rand(2, 20);
    for ($j = 0; $j < $length; $j++) {
    array_push($array[$i], $a_z[rand(0, 43)]);
    }
    sort($array[$i]);
}
echo '<pre>';
print_r($array);
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
$array = [];
for ($i = 0; $i < 30; $i++) {
    $array[$i] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "6. --------------", "<br>";
// function sort_asc($item1, $item2) {
//     if ($item1["user_id"] == $item2["user_id"]) return 0;
//     return ($item1["user_id"] < $item2["user_id"]) ? 1 : -1;
// }
// usort($array, 'sort_asc');
array_multisort(array_column($array, 'user_id'), SORT_ASC, $array);
array_multisort(array_column($array, 'place_in_row'), SORT_DESC, $array);
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "7. --------------", "<br>";
for ($i = 0; $i < 30; $i++) {
    $name = '';
    for ($j = 0; $j < rand(5, 15); $j++) {
        $name .= $a_z[rand(0,43)];
    }
    $surname = '';
    for ($j = 0; $j < rand(5, 15); $j++) {
        $surname .= $a_z[rand(0,43)];
    }
    $array[$i]['name'] = $name;
    $array[$i]['surname'] = $surname;
}
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "8. --------------", "<br>";
$array = [];
for ($i = 0; $i < 10; $i++) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $array[$i] = rand(0, 10);
    } else {
        for ($j = 0; $j < $sk; $j++) {
            $array[$i][$j] = rand(0, 10);
        }
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';
?>

<?php 
echo "9. --------------", "<br>";
$sum = 0;
for ($i = 0; $i < 10; $i++) {
    if (!is_array($array[$i])) {
        $sum += $array[$i];
    } else {
        $sum += array_sum($array[$i]);
    }
}
echo $sum;
echo '<br><br>';
?>

<?php 
echo "10. --------------", "<br>";
$simb = '#%+*@裡';
$array = [];
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $spalva = '#';
        for ($x = 0; $x < 6; $x++) {
            $spalva .= rand(0, 9);
        }
        $array[$i][$j] = ['value' => $simb[rand(0, 5)], 'color' => $spalva];
    }
}
echo '<pre>';
print_r($array);
echo '</pre>';
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "<span style='color:".$array[$i][$j]['color']."; padding:10px;'>".$array[$i][$j]['value']."</span>";
    }
    echo "<br>";
}
echo '<br><br>';
?>