<?php namespace DSchoenbauer\View\Exception;

use PHPUnit_Framework_TestCase;

/**
 * Description of ExceptionTest
 *
 * @author David
 */
class ExceptionTest  extends PHPUnit_Framework_TestCase{
    
    private $_object;
    
    protected function setUp() {
        $this->_object = new Exception;
    }
    
    public function testExceptionIsInstanceOfExceptionInterface() {
        $this->assertInstanceOf(ExceptionInterface::class, $this->_object);
    }
    
    public function testExceptionIsInstanceOfException() {
        $this->assertInstanceOf(\Exception::class, $this->_object);
    }
}
