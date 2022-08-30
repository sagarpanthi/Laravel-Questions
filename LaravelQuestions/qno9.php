<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pattern</title>
</head>

<body>
    <?php
    echo "<br>";
    for ($i = 7; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
</body>

</html>