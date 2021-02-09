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