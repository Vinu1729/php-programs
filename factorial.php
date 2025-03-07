<?php 

function A($a){
    $f=1;
    for($i=1; $i<=$a; $i++)
    {
        $f=$f*$i;
    }
    echo"facto is ",$f;
}
A(12);
A(6);


?>
