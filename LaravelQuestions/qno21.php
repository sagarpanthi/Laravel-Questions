<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flody's Triangle</title>
</head>

<body>
    <?php
    echo "<br>";
    $n = 5;
    $value = 1;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$value";
            $value++;
        }
        echo "<br>";
    }
    ?>
</body>

</html>