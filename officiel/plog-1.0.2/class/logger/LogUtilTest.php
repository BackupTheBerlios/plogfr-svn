<?php

require_once "LogUtil.php";
require_once "PHPUnit2/Framework/TestCase.php";

class LogUtilTest extends PHPUnit2_Framework_TestCase {

    protected function setUp() {
    }

    public function testFormat() {
        // test integer
        $var = 1;
        $this->assertEquals("2", LogUtil::format($var));

        // test string
        $var = "test";
        $this->assertEquals("test",LogUtil::format($var));

        // test simple array
        $var = array("a"=>1,"b"=>2);
        $this->assertEquals("array(2) {
  [\"a\"]=>
  int(1)
  [\"b\"]=>
  int(2)
}
",LogUtil::format($var));
        
        // test boolean
        $var = true;
        $this->assertEquals("TRUE",LogUtil::format($var));

        // test object
        // but how to? object->toString()?
    }
}
?>

