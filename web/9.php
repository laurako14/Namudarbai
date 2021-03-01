<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $color = 'black';
        $x = rand(3, 10);
        $y = "<form action='http://localhost/Namudarbai/web/9.php' method='post'>";
        for ($i = 0; $i < $x; $i++) {
            $abc = "ABCDEFGHIJKL";
            $y .= "<input type='checkbox' name='$abc[$i]'>
            <label style='color: white;'>".$abc[$i]."</label><br>";
        }
        $y .= "<input type='submit' value='Išsiųsti'></form>";
    } 
    else {
        $color = 'white';
        $y = count($_POST);
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 9</title>
</head>
<body style='background-color: <?= $color ?>;'>
    <?= $y ?>
    
    



</body>
</html>