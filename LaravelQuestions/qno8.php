<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Check LEAP year</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="value">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $year = $_POST['value'];

        if ($year % 400 == 0)
            print("It is a leap year");
        else if ($year % 100 == 0)
            print("It is not a leap year");
        else if ($year % 4 == 0)
            print("It is a leap year");
        else
            print("It is not a leap year");
    }
    ?>
</body>

</html>