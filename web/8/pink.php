<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 1</title>
</head>
<body style='background-color: pink;'>
    
    <?php 
    if (isset($_POST['color'])) {
        header("Location: http://localhost/Namudarbai/web/8/rose.php");
    } 
    ?>
<form action="" method="post">
<input type="text" name="color" value="">
<br>
<input type="submit" value="Go to rose">
</form>
</body>
</html>