<?php
    function add_five(&$value) {
        $value += 10;
      }
      
      $num = 20;
      add_five($num);
      echo $num;
      
    ?>