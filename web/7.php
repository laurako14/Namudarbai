<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 7</title>
</head>
<body 
<?php 
    _d($_SERVER['REQUEST_METHOD']);
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "style='background-color: yellow;'";
        header("refresh:5;url=http://localhost/Namudarbai/web/7.php");
    }
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "style='background-color: green;'";
    }
    ?>
    >
    <form action="" method="get">
<input type="submit" value="Išsiųsti">
</form>
<form action="" method="post">
<input type="submit" value="Išsiųsti">
</form>


</body>
</html>