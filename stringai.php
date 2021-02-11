<?php
echo "1. --------------", "<br>";
$name = 'Keanu';
$surname = 'Reeves';

if ($name > $surname) {
    echo $surname;
} else {
    echo $name;
}
echo '<br><br>';
?>

<?php
echo "2. --------------", "<br>";
$name = 'Keanu';
$surname = 'Reeves';

echo strtoupper($name), "<br>", strtolower($surname), "<br>";
echo '<br><br>';
?>

<?php
echo "3. --------------", "<br>";
$name = 'Keanu';
$surname = 'Reeves';
$initials = substr($name, 0, 1).substr($surname, 0, 1);

echo $initials, "<br>";
echo '<br><br>';
?>

<?php
echo "4. --------------", "<br>";
$name = 'Keanu';
$surname = 'Reeves';
$last3 = substr($name, -3).substr($surname, -3);

echo $last3, "<br>";
echo '<br><br>';
?>

<?php
echo "5. --------------", "<br>";
$string = "An American in Paris";
$find = ["a", "A"];
echo str_replace($find, "*", $string);
echo '<br><br>';
?>

<?php
echo "6. --------------", "<br>";
$string = "An American in Paris";
echo substr_count($string, "a") + substr_count($string, "A");
echo '<br><br>';
?>

<?php
echo "7. --------------", "<br>";
$string = "An American in Paris";
$string2 = "Breakfast at Tiffany's";
$string3 = "2001: A Space Odyssey";
$string4 = "It's a Wonderful Life";
$find = ["a", "A", "e", "E", "i", "I", "o", "O"];
echo str_replace($find, "", $string), "<br>";
echo str_replace($find, "", $string2), "<br>";
echo str_replace($find, "", $string3), "<br>";
echo str_replace($find, "", $string4), "<br>";
echo '<br><br>';
?>

<?php 
echo "8. --------------", "<br>";
$string = 'Star Wars: Episode'.str_repeat(' ', rand(0,5)). rand(1,9).' - A New Hope';
echo (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT);
echo '<br><br>';
?>

<?php 
echo "9. --------------", "<br>";
$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$words = explode(" ", $string);
$words2 = explode(" ", $string2);
$count = 0;
for ($i = 0; $i < count($words); $i++) {
    if (mb_strlen($words[$i]) <= 5) {
        $count++;
    }
}
$count2 = 0;
for ($i = 0; $i < count($words2); $i++) {
    if (mb_strlen($words2[$i]) <= 5) {
        $count2++;
    }
}
echo $count, "<br>", $count2, "<br>";
echo '<br><br>';
?>

<?php 
echo "10. --------------", "<br>";
$a_z = "abcdefghijklmnoprstuvzABCDEFGHIJKLMNOPRSTUVZ";
$new = "";
for ($i = 0; $i < 3; $i++) {
    $int = rand(0,44);
    $new .= $a_z[$int];
}
echo $new, "<br>";

echo '<br><br>';
?>

<?php 
echo "11. --------------", "<br>";
$string = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$new = "";
$words = explode(" ", $string);
$words2 = explode(" ", $string2);
$wordsArray = array_unique(array_merge($words, $words2));
for ($i = 0; $i < 100; $i++) {
    $int = rand(0, count($wordsArray) - 1);
    $newWord = $wordsArray[$int];
    if (str_contains($new, $newWord)) {
       continue;
    } else {
        $new .= $newWord." ";
    }
    if (count(explode(" ", $new)) == 11) {
        break;
    }
}
echo $new, "<br>";
echo '<br><br>';
?>