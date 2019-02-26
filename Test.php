<?php

class Test extends PHPUnit_Framework_TestCase
{
	public function testOnePlusOne() {
		$this->assertEquals(1+1,2);
  	}
	
	public function testTwoPlusTwo() {
		$this->assertEquals(2+2,3);
	}
	
	public function testPlusTwo() {
		$this->assertEquals(2+2,3);
	}
}

?>
