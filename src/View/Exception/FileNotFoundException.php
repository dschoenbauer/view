<?php namespace DSchoenbauer\View\Exception;

/**
 * Description of FileNotFoundException
 *
 * @author David
 */
class FileNotFoundException extends InvalidArgumentException{
    private $_fileName;
    
    public function __construct($fileName = "", $message = "", $code = 0, $previous = null) {
        $this->setFileName($fileName);
        parent::__construct($message, $code, $previous);
    }
    
    public function getFileName() {
        return $this->_fileName;
    }

    public function setFileName($fileName) {
        $this->_fileName = $fileName;
        return $this;
    }
}
