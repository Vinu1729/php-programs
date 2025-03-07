<?php 

class paramiterized{
     
    public $name;
    public $work;

    function __construct($name,$work){
        $this->name=$name;
        $this->work=$work;

    }
    function display(){

        echo $this->name." : ";
        echo "works as a  ".$this->work."<br>";

    }
}
$obj = new paramiterized("vinayak","CEO");
$obj->display();

$obj = new paramiterized("rakesh","devloper");
$obj->display();

?>