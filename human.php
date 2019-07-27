<?php

require_once 'thinkable.php';
require_once 'animal.php';

class Human extends Animal{
    use think;
    Public $hobby;
    function __construct($name,$age,$hobby){
        $this->name=$name;
        $this->age=$age;
        $this->hobby=$hobby;
    }
}
?>