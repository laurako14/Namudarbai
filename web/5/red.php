<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 5</title>
</head>
<body style='background-color: red;'>
    <a href="?redirect=1" style='color: white;'>Home</a>
    <?php 
    if (isset($_GET['redirect'])) {
        header("Location: http://localhost/Namudarbai/web/5/blue.php");
    } 
    ?>

</body>
</html>