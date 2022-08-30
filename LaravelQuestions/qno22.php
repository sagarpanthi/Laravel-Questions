<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
</head>

<body>
    <h1>Print Reverse Number</h1>
    <!-- getting input from user -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="string" name="str1">
        <input type="string" name="str2">

        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];
        $new_str = $str1 . $str2;
        echo $new_str;
    }
    ?>
</body>

</html>