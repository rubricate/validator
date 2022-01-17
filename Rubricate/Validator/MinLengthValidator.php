<?php

namespace Rubricate\Validator;

class MinLengthValidator extends AbstractStrValidator 
    implements IIsValidValidator
{
    private $v;

    public function __construct($min)
    {
        $this->v = new VoValidator();
        $this->v->setRule((int) $min);
    }

    public function isValid($field): bool
    {
        $this->v->setField($field);

        $g    = parent::stripAccents($this->v->getField());
        $size = strlen($g);
        $rule = $this->v->getRule();

        return ( $size >= $rule);
    }
}

