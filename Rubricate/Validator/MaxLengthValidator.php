<?php

namespace Rubricate\Validator;

class MaxLengthValidator extends AbstractStrValidator 
    implements IIsValidValidator
{
    private $v;

    public function __construct($max)
    {
        $this->v = new VoValidator();
        $this->v->setRule((int) $max);
    }

    public function isValid($field)
    {
        $this->v->setField($field);

        $g    = parent::stripAccents($this->v->getField());
        $size = strlen($g);
        $rule = $this->v->getRule();

        return ( $size <= $rule);
    }
}

