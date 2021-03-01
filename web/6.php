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
    // if (!empty($_GET)) {
    //     echo "style='background-color: green;'";
    //     header("refresh:5;url=http://localhost/Namudarbai/web/6.php");
    // } 
    // if (!empty($_POST)) {
    //     echo "style='background-color: yellow;'";
    // } 
    _d($_SERVER['REQUEST_METHOD']);
    // echo "style='background-color: white;'";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "style='background-color: yellow;'";
    }
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "style='background-color: green;'";
    }
    ?>
    >
    <form action="" method="get">
<input type="submit" value="GET">
</form>
<form action="" method="post">
<input type="submit" value="POST">
</form>


</body>
</html>