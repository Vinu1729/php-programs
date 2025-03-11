<?php
class Vinayak {
    public $name = "Ordering";

    public function display() {
        echo "Processing order...<br>";
    }
}

class Order extends Vinayak {
    public function confirm() {
        echo $this->name . " confirmed.<br>";
    }
}

$o = new Order();
$o->display();
$o->confirm();
?>
