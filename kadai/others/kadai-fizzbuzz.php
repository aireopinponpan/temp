<?php
    function fizzbuzz($num) {
      if ($num % 3 == 0 && $num % 5 == 0) {
          return 'FizzBuzz';
      }
      elseif ($num % 3 == 0) {
       return 'FIzz';
      }
      elseif ($num % 5 == 0) {
          return 'Buzz';
      }
      else {
            return $num;
      }
    }
    
    
    $max = 100;
    $result = 0;
    for ($i = 1; $i <= $max; $i++) {
        $result = fizzbuzz($i);
        print $result . PHP_EOL;
    }
?>