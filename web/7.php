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
    if (isset($_GET['color'])) {
        echo "style='background-color: green;'";
    } 
    if (isset($_POST['color'])) {
        echo "style='background-color: yellow;'";
        header("refresh:3;url=http://localhost/Namudarbai/web/7.php");
    } 
    ?>
    >
    <form action="" method="get">
Spalva
<input type="text" name="color" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>
<form action="" method="post">
Spalva
<input type="text" name="color" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>


</body>
</html>