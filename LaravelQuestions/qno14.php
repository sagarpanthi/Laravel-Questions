<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Biggest Number in Array</h1>
    <?php
    $num = array(10, 25, 298, 12, 36, 58, 65, 56, 255, 1, 257, 3, 13);
    $big = $num[0];
    for ($i = 0; $i < count($num); $i++) {
        if ($num[$i] > $big) {
            $big = $num[$i];
        }
    }
    echo "$big is the biggest number in array";
    ?>
</body>

</html>