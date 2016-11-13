<?php

namespace DSchoenbauer\View;

use PHPUnit_Framework_TestCase;

/**
 * Description of CollectionTest
 *
 * @author David
 */
class CollectionTest extends PHPUnit_Framework_TestCase {

    private $_object;

    protected function setUp() {
        $this->_object = new Collection();
    }

    public function testCollectionHasViewInterface(){
        $this->assertInstanceOf(ViewInterface::class, $this->_object);
    }
    
    public function testAddingToCollection(){
        $this->assertCount(0, $this->_object->getItems());
        $this->_object->add($this->getMockViewInterface(""));
        $this->assertCount(1, $this->_object->getItems());
        $this->_object->add($this->getMockViewInterface(""));
        $this->_object->add($this->getMockViewInterface(""));
        $this->assertCount(3, $this->_object->getItems());
    }
    
    public function testCollectionRender(){
        $this->_object->add($this->getMockViewInterface('test'));
        $this->_object->add($this->getMockViewInterface('-test'));
        $this->assertEquals('test-test', $this->_object->render([]));
    }
    
    public function testCollectionRenderPassesData(){
        $this->_object->add($this->getMockViewInterfaceWithCB());
        $this->_object->add($this->getMockViewInterfaceWithCB());
        $this->assertEquals('testtest', $this->_object->render(['test']));
    }
    
    private function getMockViewInterface($renderReturnString){
        $mock = $this->getMockBuilder(ViewInterface::class)->getMock();
        $mock->expects($this->any())->method('render')->willReturn($renderReturnString);
        return $mock;
    }
    private function getMockViewInterfaceWithCB(){
        $mock = $this->getMockBuilder(ViewInterface::class)->getMock();
        $mock->expects($this->any())->method('render')->willReturnCallback(function($data){return implode("", $data);});
        return $mock;
    }
}
