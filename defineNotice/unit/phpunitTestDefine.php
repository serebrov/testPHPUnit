<?php
//require_once('PEAR/PHPUnit/Autoload.php');

class phpunitTestBase extends PHPUnit_Framework_TestCase {
    protected function setUp() {
        require_once('phpunitTestDef.php');
    }

    public function testSomething() {
        require_once('phpunitTestDef.php');
    }
}

/*class phpunitTest extends phpunitTestBase {
    public function testSomething() {
        doThrow();
    }
}*/
