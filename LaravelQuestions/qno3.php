<!DOCTYPE html>
<html lang="en">

<head>
    <title>Armstrong</title>
</head>

<body>
    <h1>Check Armstrong Number</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="armstrong">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['armstrong'];
        $temp = $num; //original value of num is stored to check at last.
        $arm = 0;
        $rem = 0;
        for ($i = 0; $i <= strlen($num); $i++) {
            $rem = $num % 10;
            $arm = $arm + $rem * $rem * $rem;
            $num = $num / 10;
        }
        if ($arm == $temp) {
            echo "$temp is Armstrong";
        } else {
            echo "$temp is not Armstrong";
        }
    }
    ?>
</body>

</html>