<?php

/*
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/validator
 * @copyright   2017 
 * 
 */
 

namespace Rubricate\Validator;


class VoValidator
{
    private $_field;
    private $_rule;


    public function getField()
    {
        return $this->_field;
    }

    public function setField($field)
    {
        $this->_field = $field;
        return $this;
    }




    public function getRule()
    {
        return $this->_rule;
    }

    public function setRule($rule)
    {
        $this->_rule = $rule;
        return $this;
    }



}    

