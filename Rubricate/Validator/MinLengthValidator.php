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

    public function isValid($field)
    {
        $g    = parent::stripAccents($field);
        $size = strlen($g);
        $rule = $this->v->getRule();

        return ( $size >= $rule);
    }
}

