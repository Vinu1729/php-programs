<?php 

class jewelerry{
    var $cost = 1000;
    public function printname($name){
        echo'this is parent class . jeweleery and name:'.$name.PHP_EOL,"<br>";

    }
}

class Necklace extends jewelerry{

    public function printname($name){
        echo'this is child class, jewelerry and name:'.$name.PHP_EOL."<br>";
        echo'price is '.$this->cost.PHP_EOL;
    }


}

$f = new jewelerry();
$s = new Necklace();
$f->printname('ring');
$s->printname('Necklace');

?>