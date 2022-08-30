<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pattern</title>
</head>

<body>
    <?php
    $x = 0;
    for ($i = 1; $i <= 5; $i++) {
        $x += $i;
        for ($j = 1; $j <= $x; $j++) {
            echo "*";
        }
        for ($z = 0; $z < $i; $z++) {
            echo "0";
        }
        echo "</br>";
    }
    ?>
</body>

</html>