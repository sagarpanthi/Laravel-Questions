<!DOCTYPE html>
<html lang="en">

<head>
    <title>Swapping Numbers</title>
</head>

<body>
    <h1>Swap two numbers</h1>
    <?php
    $x = 20;
    $y = 50;
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "After Swapping x is " . $x . " y is " . $y;
    ?>
</body>

</html>