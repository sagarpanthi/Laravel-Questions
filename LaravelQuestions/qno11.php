<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pattern</title>
</head>

<body>
    <?php
    for ($i = 0; $i <= 8; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j;
        }
        echo "<br>";
    }
    ?>
</body>

</html>