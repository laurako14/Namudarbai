<?php 
echo "1. --------------", "<br>";
$linija = str_repeat("*", 400);
echo "<p style='word-wrap: break-word;'>". $linija. "</p>";
for ($i = 0; $i < (400/50); $i++) {
    echo "<p style='word-wrap: break-word;'>". str_repeat("*", 50). "</p>";
}
echo '<br><br>';
?>

<?php 
echo "2. --------------", "<br>";
$did150 = 0;
for ($i = 0; $i < 300; $i++) {
    $genSk = rand(0, 300). " ";
    if ($genSk > 150) {
        $did150++;
    }
    if ($genSk > 275) {
        echo "<span style=color:red;> $genSk </span>";
    } else {
        echo "<span> $genSk </span>";
    }
}
echo '<br><br>';
echo "Didesniu nei 150: $did150";
echo '<br><br>';
?>

<?php 
echo "3. --------------", "<br>";
$random = rand(3000, 4000);
$ats = "77";
for ($i = $ats+1; $i < $random; $i++) {
    if ($i % 77 == 0) {
        $ats .= ","."<span> $i </span>";
    }
}
echo $ats;
echo '<br><br>';
?>

<?php 
echo "4. --------------", "<br>";
for ($i = 0; $i < 25; $i++) {
    for ($j = 0; $j < 25; $j++) {
        echo "<span style='padding-right: 10px;'> * </span>";
    }
    echo "<br>";
}
echo '<br><br>';
?>

<?php 
echo "5. --------------", "<br>";
for ($i = 0; $i < 25; $i++) {
    for ($j = 0; $j < 25; $j++) {
        if ($j == $i || $j == (24 - $i)) {
            echo "<span style='padding-right: 10px; color:red;'> * </span>";
        } else {
            echo "<span style='padding-right: 10px;'> * </span>";
        }
    }
    echo "<br>";
}
echo '<br><br>';
?>

<?php 
echo "6. --------------", "<br>";
$rez = "";
do {
    $moneta = rand(0, 1);
    if ($moneta == 0) {
        $rez .= "H";
        echo "H", "<br>";
    } else {
        $rez .= "S";
        echo "S", "<br>";
    }
} while (!str_contains($rez, "H"));
echo '<br><br>';
$rez = "";
do {
    $moneta = rand(0, 1);
    if ($moneta == 0) {
        $rez .= "H";
        echo "H", "<br>";
    } else {
        $rez .= "S";
        echo "S", "<br>";
    }
} while (!str_contains($rez, "HHH"));
echo '<br><br>';
$count = 0;
do {
    $moneta = rand(0, 1);
    if ($moneta == 0) {
        $count++;
        echo "H", "<br>";
    } else {
        echo "S", "<br>";
    }
} while ($count != 3);
echo '<br><br>';
?>

<?php 
echo "7. --------------", "<br>";
$player1 = 'Petras';
$player2 = 'Kazys';
$play = true;
$score1 = 0;
$score2 = 0;
while ($play) {
    if ($score1 >= 222) {
        echo "Partija laimejo: $player1,".$player1.":".$score1.";".$player2.":".$score2;
        $play = false;
    } elseif ($score2 >= 222) {
        echo "Partija laimejo: $player2,".$player1.":".$score1.";".$player2.":".$score2;
        $play = false;
    } else {
    $petrasTaskai = rand(10, 20);
    $score1 += $petrasTaskai;
    $kazysTaskai = rand(5, 25);
    $score2 += $kazysTaskai;
    }
}
echo '<br><br>';
?>

<?php 
echo "8. --------------", "<br>";
$x = 1;
echo "<div style='text-align:center;'>";
for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < $x; $j++) {
            echo "<span style='padding-right: 10px; color: rgb(".rand(0, 255).",". rand(0, 255).",". rand(0, 255).");'> * </span>";
        }
        $x++;
        echo "<br>";
}
$x--;
for ($i = 10; $i >= 0; $i--) {
    for ($j = $x; $j >= 0; $j--) {
        echo "<span style='padding-right: 10px; color: rgb(".rand(0, 255).",". rand(0, 255).",". rand(0, 255).");'> * </span>";
    }
    $x--;
    echo "<br>";
}
echo "</div>";
echo '<br><br>';
?>

<?php 
echo "9. --------------", "<br>";
$c = "10 bezdzioniu \n suvalge 20 bananu.";
$s = '10 bezdzioniu \n suvalge 20 bananu.';
$a = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $c;
}
$b = microtime(true);
echo $duration = $b - $a, "<br>", "Stringas su dvigubom kabutem", "<br>";
$d = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $s;
}
$e = microtime(true);
echo $duration = $e - $d, "<br>", "Stringas su viengubom kabutem", "<br>";
echo '<br><br>';
?>

<?php 
echo "10. --------------", "<br>";
$count = 0;
$finish = 0;
do {
    $smugis = rand(5, 20);
    $finish += $smugis;
    $count++;
} while ($finish < 85*5);
echo "5 vinys ikalti $count mazais smugiais";
echo '<br><br>';
$count = 0;
$finish = 0;
do {
    $smugis = rand(20, 30);
    $tikimybe = rand(0,1);
    if ($tikimybe == 1) {
    $finish += $smugis;
    $count++;
    }
} while ($finish < 85*5);
echo "5 vinys ikalti $count dideliais smugiais";
echo '<br><br>';
?>

<!-- <?php 
echo "11. --------------", "<br>";
$string = "";
for ($i = 0; $i < 150; $i++) {
    $newNumber = rand(1, 200);
    if (str_contains($string, $newNumber)) {
        continue;
    } else {
        $string .= $newNumber." ";
    }
    if (count(explode(" ", $string)) == 51) {
        break;
    }
}
echo $string;
$array = explode(" ", $string);
echo '<pre>';
print_r($array);
echo '</pre>';
$string2 = "";
for ($i = 0, $x = 2; $i < count($array)-1, $x < 10; $i++, $x++) {
    $nesidalina = true;
    if ($array[$i] % $x == 0) {
        $nesidalina = false;
        break;
    } 
    if ($nesidalina) {
        $string2 .= (int) $array[$i]." ";
    }
}
echo $string2;
echo '<br><br>';
?> -->