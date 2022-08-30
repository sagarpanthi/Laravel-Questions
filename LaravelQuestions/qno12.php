<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Factor of a number</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="value">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['value'];

        echo "Factors of $num are:";
        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                echo " $i ";
            }
        }
    }
    ?>
</body>

</html>