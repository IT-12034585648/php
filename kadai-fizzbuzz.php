<?php
$max=100;
function fizzbuzz($num){
    $result=0;
    if($num % 15 == 0){
        $result="FizzBuzz";
    }
    else if($num % 5 ==0){
        $result="Buzz";
    }
    else if($num % 3==0){
        $result="Fizz";
    }
    else{
        $result=$num;
    }
    return $result;
}
for($i=0;$i<=$max;$i++){
    print fizzbuzz($i) . PHP_EOL;
}
?>