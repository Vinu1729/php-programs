<?php 

class Fruit{
    public $name;
    public $color;



public function __construct($name) {
    $this->name = $name;
    
}

public function __destruct(){
    echo"the first fruit is {$this->name}.";
}

}
$apple =new Fruit("Apple");
?>