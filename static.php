<?php

function myfun() 
 {
   static $x=0;
   echo "$x";
   $x++;
   
}

myfun();
echo "<BR>";
myfun();
echo "<BR>";
myfun();
?>
