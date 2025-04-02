<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }      
      echo "1 + 10 = " . sum(1, 10) . "<br>";
      echo "4 + 100 = " . sum(4, 100) . "<br>";
      echo "3 + 1000 = " . sum(3, 1000);
    ?>
    
</body>
</html>