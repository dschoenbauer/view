<?php

namespace DSchoenbauer\View;

/**
 * Description of InterpolateTraitTest
 *
 * @author David
 */
class InterpolateTraitTest extends \PHPUnit_Framework_TestCase {

    private $_object;

    protected function setUp() {
        $this->_object = $this->getMockForTrait(InterpolateTrait::class);
    }

    public function testInterpolate() {
        $this->assertEquals("<p>test</p>", $this->_object->interpolate('<p>{data}</p>', ['data' => 'test']));
    }

    public function testInterpolateWithArray() {
        $this->assertEquals('<p>{data}</p>', $this->_object->interpolate('<p>{data}</p>', ['data' => ['test']]));
    }

    public function testInterpolateWithObject() {
        $this->assertEquals('<p>{data}</p>', $this->_object->interpolate('<p>{data}</p>', ['data' => new \stdClass()]));
    }
    
    public function testInterpolateWithObjectToStringMethod() {
        $this->assertEquals('<p>test</p>', $this->_object->interpolate('<p>{data}</p>', ['data' => $this]));
    }

    public function testInterpolateNoData() {
        $this->assertEquals('<p>{data}</p>', $this->_object->interpolate('<p>{data}</p>'));
    }
    
    public function __toString() {
        return "test";
    }
}
