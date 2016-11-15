<?php namespace DSchoenbauer\View\Exception;

/**
 * Description of FileNotFoundExceptionTest
 *
 * @author David
 */
class FileNotFoundExceptionTest extends \PHPUnit_Framework_TestCase{
    private $_object;
    
    protected function setUp() {
        $this->_object = new FileNotFoundException();
    }
    
    public function testFileIsInvalidArgumentException(){
        $this->assertInstanceOf(InvalidArgumentException::class, $this->_object);
    }
    
    public function testFileGetterSetter(){
        $file = 'file.txt';
        $this->assertEquals($file,$this->_object->setFileName($file)->getFileName());
    }
    
    public function testConstructor(){
        $file = 'file.txt';
        $object = new FileNotFoundException($file);
        $this->assertEquals($file,$object->getFileName());
    }
}
