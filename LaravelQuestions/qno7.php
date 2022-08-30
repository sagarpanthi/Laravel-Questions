<!DOCTYPE html>
<html lang="en">

<head>
    <title>HCF</title>
</head>

<body>
    <h1>HCF</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="x">
        <input type="number" name="y">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = $_POST['x'];
        $y = $_POST['y'];

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
        echo "HCF of $x and $y is $hcf";
    }
    ?>
</body>

</html>