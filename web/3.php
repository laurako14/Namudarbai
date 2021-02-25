<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 3</title>
</head>
<body 
    <?php 
    if (isset($_GET['color'])) {
        $color = $_GET['color'];
        echo "style='background-color: #". $color.";'";
    } 
    ?>
    >
<form action="" method="get">
Spalva
<input type="text" name="color" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>


</body>
</html>