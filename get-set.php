<?php

class Myclass{

    private $data=[];
    public function __get($name){

        if (array_key_exists($name,$this->data)){
            return $this->data[$name];
        }

    }
    public function __set($name, $value)
    {

        $this->data[$name]=$value;
    }


}
$obj = new Myclass;
$obj->me='vinayak';
echo $obj->me;

?>