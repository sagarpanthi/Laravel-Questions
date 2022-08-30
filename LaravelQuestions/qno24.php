<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Second Highest Number in Array</h1>
    <?php
    $numbers = array(10, 25, 298, 12, 36, 58, 65, 56, 1, 3, 13);
    rsort($numbers); // sorts an array in reverse order i.e highest to lowest
    echo "Second highest number in array is:" . $numbers[1];
    ?>
</body>

</html>