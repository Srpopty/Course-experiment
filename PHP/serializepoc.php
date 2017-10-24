<?php
class Foo1 {
    private $obj;
    function __construct() {
        $this->obj = new Flag();
    }

    function __destruct() {
        $this->obj->action();
    }
}

class Flag {
    function action() {
        echo $flag3;
    }
}

echo serialize(new Foo1());// O:4:"Foo1":1:{s:9:"%00Foo1%00obj";O:4:"Flag":0:{}}
?>