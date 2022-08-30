<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>LCM</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="num1">
        <input type="number" name="num2">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST['num1'];
        $y = $_POST['num2'];

        if ($x > $y) {
            $temp = $x;
            $x = $y;
            $y = $temp;
        }

        for ($i = 1; $i <= $x; $i++) {
            if ($x % $i == 0 and $y % $i == 0) {
                $hcf = $i;
            }
        }
        $lcm = ($x * $y) / $hcf;
        echo "LCM of $x and $y is: $lcm";
    }
    ?>
</body>

</html>