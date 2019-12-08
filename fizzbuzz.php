<?php
    $max=100 ;
    for ($i = 1; $i <= $max; $i++) {
        print FizzBuzz($i).PHP_EOL;
    }
    

  
   function FizzBuzz($i){
    if($i%3==0 && $i%5==0){
          $result="FizzBuzz";
      } elseif($i%3==0){
          $result="Fizz";
      } elseif($i%5==0){
          $result="Buzz";
       }else{
          $result=$i;
         
       }
       return $result;
   }
    
    
    
