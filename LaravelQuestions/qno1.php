<!DOCTYPE html>
<html lang="en">

<head>
    <title>Factorial</title>
</head>

<body>
    <h1>Factorial</h1>
    <?php
    $n = 5;
    $f = 1;

    for ($i = 1; $i <= $n; $i++) {
        $f = $f * $i;
    }
    echo "Factorial of $n is $f";
    ?>
</body>

</html>