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
$find = array("a", "A");
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
$find = array("a", "A", "e", "E", "i", "I", "o", "O");
echo str_replace($find, "", $string), "<br>";
echo str_replace($find, "", $string2), "<br>";
echo str_replace($find, "", $string3), "<br>";
echo str_replace($find, "", $string4), "<br>";
echo '<br><br>';
?>

<?php 
echo "8. --------------", "<br>";
$string = 'Star Wars: Episode'.str_repeat(' ', rand(0,5)). rand(1,9).'A New Hope';
echo filter_var($string, FILTER_SANITIZE_NUMBER_INT);
echo '<br><br>';
?>

<?php 
echo "9. --------------", "<br>";
$string = "Don't Be a Menace to Sount Central While Drinking Your Juice in the Hood";
$words = explode(" ", $string);
$count = 0;
for ($i = 0; $i < count($words); $i++) {
    if (count($words[$i]) <= 5) {
        $count++;
    }
}
echo $count, "<br>";
echo '<br><br>';
?>