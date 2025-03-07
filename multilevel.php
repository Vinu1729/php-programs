<?php 

class gparent{
    function ajoba(){
        echo"g parent<br>";
    }
}
class parentt extends gparent{
    function papa(){
        echo"parent<br>";
    }
}

class child extends parentt{
    function mulga(){
        echo"child ";
    }
}

$obj =  new child();
$obj->ajoba();
$obj->papa();
$obj->mulga();
?>                                                        