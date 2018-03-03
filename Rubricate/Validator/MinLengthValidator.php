<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/validator
 * @copyright   2017 
 * 
 */
 

namespace Rubricate\Validator;


class MinLengthValidator implements IIsValidValidator
{

    private $_val;

    public function __construct($min)
    {

        $this->_val = new VoValidator();
        $this->_val->setRule((int) $min);

        return $this;

    }


    public function isValid($field)
    {
        $this->_val->setField($field);
        $size = mb_strlen($this->_val->getField(), 'UTF-8');
        $rule = $this->_val->getRule();

        return ( $size >= $rule);


    } 



}



