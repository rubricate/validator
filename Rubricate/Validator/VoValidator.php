<?php

namespace Rubricate\Validator;

class VoValidator
{
    private $field, $rule;

    public function getField()
    {
        return $this->field;
    }

    public function setField($field)
    {
        $this->field = $field;
        return $this;
    }

    public function getRule()
    {
        return $this->rule;
    }

    public function setRule($rule)
    {
        $this->rule = $rule;
        return $this;
    }
}    

