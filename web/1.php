<?php 
$color = isset($_GET['color']) ? 'red' : 'black';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 1</title>
</head>
<body style="background:<?= $color?>;">
    <a href="1.php" style='color: blue;'>Home</a>
    <a href="?color=1" style='color: blue;'>Home</a>


</body>
</html>