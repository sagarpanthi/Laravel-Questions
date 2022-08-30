<!DOCTYPE html>
<html lang="en">

<head>
    <title>Fibonacci Series</title>
</head>

<body>
    <h1>Generate Fibonacci Series</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="number" name="fibonacci">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['fibonacci'];
        $a = 0;
        $b = 1;
        echo $a . $b;
        for ($i = 0; $i <= $num; $i++) {
            $c = $a + $b;
            echo $c;
            $a = $b;
            $b = $c;
        }
    }
    ?>
</body>

</html>