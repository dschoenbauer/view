<?php

namespace DSchoenbauer\View\Exception;

use InvalidArgumentException as SystemInvalidArgumentException;
use PHPUnit_Framework_TestCase;

/**
 * Description of InvalidArgumentExceptionTest
 *
 * @author David
 */
class InvalidArgumentExceptionTest extends PHPUnit_Framework_TestCase {

    private $_object;

    protected function setUp() {
        $this->_object = new InvalidArgumentException();
    }

    public function testInstanceOfInvalidArgument(){
        $this->assertInstanceOf(SystemInvalidArgumentException::class, $this->_object);
    }
    
    public function testInstanceOfExceptionInterface(){
        $this->assertInstanceOf(ExceptionInterface::class, $this->_object);
    }
}
