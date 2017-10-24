<?php
include('header.php');
include('config.php');
show_source(__FILE__);
class Foo1 {
    private $obj;
    function __construct() {
        $this->obj = new Foo2();
    }

    function __destruct() {
        $this->obj->action();
    }
}

class Foo2 {
    function action() {
        echo "Hello~";
    }
}

class Flag {
    function action() {
        global $flag3;
        echo $flag3;
    }
}

$test = new Foo1();
if(isset($_GET['a'])){
    unserialize($_GET['a']);
}
include('footer.php');
?>