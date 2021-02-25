<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandymas 1</title>
</head>
<body>
<form action="" method="get">
Jūsų vardas
<input type="text" name="vardas" value="">
<br>
Jūsų el. pašto adresas:
<input type="text" name="elpastas" value="">
<input type="submit" value="Išsiųsti">
</form>
<?php 
$vardas = $_GET['vardas'];
$elpastas = $_GET['elpastas'];

echo $vardas;
echo $elpastas;
?>
</body>
</html>