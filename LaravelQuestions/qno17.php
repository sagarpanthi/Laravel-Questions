<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Smallest Number in Array</h1>
    <?php
    $num = array(10, 25, 298, 12, 36, 58, 65, 56, 255, 257, 3, 13);
    $small = $num[0];
    for ($i = 0; $i < count($num); $i++) {
        if ($num[$i] < $small) {
            $small = $num[$i];
        }
    }
    echo "$small is the smallest number in array";
    ?>
</body>

</html>