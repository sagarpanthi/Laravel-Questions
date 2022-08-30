<!DOCTYPE html>
<html lang="en">

<head>
   <title></title>
</head>

<body>
   <h1>Bubble Sorting</h1>
   <?php
   $array = [7, 22, 33, 99, 6, 55, 11, 2, 3, 88, 4];
   $length = count($array);
   for ($i = 0; $i < $length; $i++) {
      for ($j = 0; $j < ($length - 1 - $i); $j++) {
         if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
         }
      }
   }
   for ($i = 0; $i < $length; $i++) {
      echo " " . $array[$i];
   }
   //echo implode(' , ', $array) . '<br>';
   ?>
</body>

</html>