<?php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase{

    function testAdd(){
        $myCald = new Calculator();
        $this->assertEqual($myCald->add(1,2),3,"1 + 2");
        $this->assertEqual($myCald->add(1,2,1),4,"3 params");
    }


}