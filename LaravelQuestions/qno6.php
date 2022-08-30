<!DOCTYPE html>
<html lang="en">

<head>
    <title>Prime Number</title>
</head>

<body>
    <h1>Check Prime Number or Not</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="value">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $num = $_POST['value'];
        for ($i = 2; $i <= $num - 1; $i++) {
            if ($num % $i == 0) {
                echo "$num is not a prime number";
                echo die;
            }
        }
        echo "$num is a prime number";
    }
    ?>
</body>

</html>