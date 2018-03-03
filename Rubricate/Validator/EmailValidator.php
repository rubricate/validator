<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/validator
 * @copyright   2017 
 * 
 */
 

namespace Rubricate\Validator;


class EmailValidator implements IIsValidValidator
{

    private $_val;

    public function __construct()
    {
        $this->_val = new VoValidator();
    }


    public function isValid($field)
    {
        $this->_val->setField($field);

         return (filter_var($this->_val->getField(), FILTER_VALIDATE_EMAIL)== true);


    } 



}



