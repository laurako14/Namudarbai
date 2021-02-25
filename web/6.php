<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 6</title>
</head>
<body 
    <?php 
    if (isset($_GET['color'])) {
        echo "style='background-color: green;'";
    } 
    if (isset($_POST['post'])) {
        echo "style='background-color: yellow;'";
    } 
    ?>
    >
    <form action="" method="get">
    <input type="text" name="color" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>
<form action="" method="post">
<input type="text" name="post" value="">
<br>
<input type="submit" value="Išsiųsti">
</form>


</body>
</html>