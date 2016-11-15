<?php

namespace DSchoenbauer\View;

use DSchoenbauer\View\Exception\FileNotFoundException;

/**
 * Description of TemplatedView
 *
 * @author David
 */
class TemplatedView implements ViewInterface {

    private $_template;
    use InterpolateTrait;
    
    public function __construct($fileName = null) {
        if($fileName){
            $this->setTemplate($fileName);
        }
    }

    public function render(array $data = array()) {
        $templateData = file_get_contents($this->getTemplate());
        return $this->interpolate($templateData, $data);
    }
    
    public function getTemplate() {
        return $this->_template;
    }

    public function setTemplate($template) {
        if(!file_exists($template)){
            throw new FileNotFoundException($template);
        }
        $this->_template = $template;
        return $this;
    }
}
