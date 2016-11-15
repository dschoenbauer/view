<?php

namespace DSchoenbauer\View;

use PHPUnit_Framework_TestCase;

/**
 * Description of TemplateTest
 *
 * @author David
 */
class TemplatedViewTest extends PHPUnit_Framework_TestCase {

    private $_object;

    protected function setUp() {
        $this->_object = new TemplatedView();
    }

    public function testTemplatedViewHasViewInterface() {
        $this->assertInstanceOf(ViewInterface::class, $this->_object);
    }

    public function testTemplateMethods() {
        $file = "file/testTemplate.html";
        $this->assertEquals($file, $this->_object->setTemplate($file)->getTemplate());
    }

    /**
     * @expectedException DSchoenbauer\View\Exception\FileNotFoundException
     */
    public function testTemplateFileNotFound() {
        $file = "NotAFile.html";
        $this->_object->setTemplate($file);
    }

    public function testRenderNoData() {
        $file = "file/testSimple.html";
        $this->assertEquals("<p>{content}</p>",$this->_object->setTemplate($file)->render());
    }    
    
    public function testRenderWithData() {
        $file = "file/testSimple.html";
        $this->assertEquals("<p>test</p>",$this->_object->setTemplate($file)->render(['content'=>'test']));
    }    
}
