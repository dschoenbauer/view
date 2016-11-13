<?php namespace DSchoenbauer\View;

/**
 * Description of AbstractView
 *
 * @author David
 */
class Collection implements ViewInterface{
    private $_items = [];
    
    public function add(ViewInterface $item){
        $this->_items[] = $item;
    }
    
    public function getItems(){
        return $this->_items;
    }

    public function render(array $data = []) {
        $output = "";
        foreach ($this->_items as $item) {
            $output .= $item->render($data);
        }
        return $output;
    }

}
