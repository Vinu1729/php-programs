<?php 

class Tree {
    function tree(){

        echo"its user-defined function";
    }
    function __construct(){
        echo"<br> its pre-defined function of the class";
    }
}
$obj  = new tree;

?>