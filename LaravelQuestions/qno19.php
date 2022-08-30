<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pattern</title>
</head>

<body>
    <?php
    $size = 5;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size; $j++) {
            // printing star only in first and last row
            if ($i === 0 || $i === $size - 1) {
                echo "*";
            } else {
                // printing star only in first and last position row
                if ($j === 0 || $j === $size - 1) {
                    echo "*";
                } else {
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
    ?>
</body>

</html>