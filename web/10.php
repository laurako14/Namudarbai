<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web 1</title>
</head>
<body 
    
    <?php 
    // $_POST = [];
    if (empty($_POST)) {
        $x = rand(3, 10);
        $count = 0;
        echo "style='background-color: black;'>"."<form action='' method='post'>";
        for ($i = 0; $i < $x; $i++) {
            $abc = "ABCDEFGHIJKL";
            echo "<input type='checkbox' name='$abc[$i]'>
            <label style='color: white;'>".$abc[$i]."</label><br>";
            $count++;
        }
        echo "<input type='submit' value='Išsiųsti'>
        </form>";
    } else {
        _d($_POST);
        _d(count($_POST));
        _d($count);
    echo "style='background-color: white;'>"."<div>".count($_POST)."</div>";
    $_POST = [];
    die;
    } 
    
?>



</body>
</html>