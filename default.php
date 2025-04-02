<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function height($minheight = 30) {
        echo "The height is : $minheight <br>";
      }
      
      height(350);
      height(); // will use the default value of 50
      height(135);
      height(80);
    ?>
</body>
</html>