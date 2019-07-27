<?php

class Animal{
    Public $name;
    Public $age;

    function say(){
        print $this->name . 'です。' . $this->age . '歳です。' .PHP_EOL;;
    }
}
?>