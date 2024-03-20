<?php

declare(strict_types=1);

namespace Rubricate\Validator;

class VoValidator
{
    private $field, $rule;

    public function getField()
    {
        return $this->field;
    }

    public function setField($field): object
    {
        $this->field = $field;
        return $this;
    }

    public function getRule()
    {
        return $this->rule;
    }

    public function setRule($rule): object
    {
        $this->rule = $rule;
        return $this;
    }
}    

