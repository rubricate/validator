<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/validator
 * @copyright   2017 
 * 
 */
 

namespace Rubricate\Validator;


class MimeTypeValidator implements IIsValidValidator 
{

    private $_val;

    public function __construct($mimeTypeArr)
    {
        $this->_val = new VoValidator();
        $this->_val->setRule($mimeTypeArr);
    }


    public function isValid($fileType)
    {
        $this->_val->setField($fileType);

        return (
            in_array($this->_val->getField(), $this->_val->getRule())
        );

    } 



}



