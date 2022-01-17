<?php

namespace Rubricate\Validator;

class DateValidator implements IIsValidValidator
{
    private $v, $b = false;

    public function __construct()
    {
        $this->v = new VoValidator();
    }

    public function isValid($field): bool
    {
        $this->v->setField($field);

        if(preg_match(''
            . '/^[0-9]{4}-'
            . '([1-9]|0[1-9]|1[0-2])-'
            . '([1-9]|0[1-9]|[1-2][0-9]|3[0-1])'
            . '$/'
            . '', $this->v->getField()
        )
        ) {
            list($y, $m, $d) = explode('-', $this->v->getField());
            $this->b = checkdate($m, $d, $y);
        }

        return (bool) $this->b;
    } 
}

