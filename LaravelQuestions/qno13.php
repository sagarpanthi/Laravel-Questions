<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Table of a Number</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="value">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['value'];

        for ($i = 1; $i <= 10; $i++) {
            echo $num;
            echo "*$i=";
            echo $num * $i;
            echo "<br>";
        }
    }
    ?>
</body>

</html>