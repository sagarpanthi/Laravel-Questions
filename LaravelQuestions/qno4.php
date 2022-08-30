<!DOCTYPE html>
<html lang="en">

<head>
    <title>Reverse Number</title>
</head>

<body>
    <h1>Print Reverse Number</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="reverse">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST['reverse'];
        $temp = $num; //original value of num is stored to check at last.
        $reverse = 0;
        for ($i = 0; $i <= strlen($temp) - 1; $i++) {
            $rem = $num % 10;
            $reverse = ($reverse * 10) + $rem;
            $num = $num / 10;
        }
        echo "Reverse of $temp is $reverse";
    }
    ?>
</body>

</html>