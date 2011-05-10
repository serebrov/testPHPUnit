<?php
//require_once('PEAR/PHPUnit/Autoload.php');

class phpunitTestBase extends PHPUnit_Framework_TestCase {
    protected function setUp() {
        require_once('phpunitTestExc.php');
    }

    public function testSomething() {
        doThrow();
    }
}

/*class phpunitTest extends phpunitTestBase {
    public function testSomething() {
        doThrow();
    }
}*/
