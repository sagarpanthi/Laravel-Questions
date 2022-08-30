<!DOCTYPE html>
<html lang="en">

<head>
    <title>Decending Order</title>
</head>

<body>
    <h1>Print Reverse Number</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="value">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST['value'];
        $temp = $num;
        for ($i = 0; $i <= $temp - 1; $i++) {
            echo $num;
            echo "<br>";
            $num = $num - 1;
        }
    }
    ?>
</body>

</html>