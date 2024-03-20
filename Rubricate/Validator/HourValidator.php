<?php

declare(strict_types=1);

namespace Rubricate\Validator;

class HourValidator implements IIsValidValidator
{
    private $v;

    public function __construct()
    {
        $this->v = new VoValidator();
    }

    public function isValid($field): bool
    {
        $this->v->setField($field);
 
        return (preg_match(
            ''
            . '/^(2[0-3]|[01][0-9]):'
            . '[0-5][0-9]:'
            . '[0-5][0-9]'
            . '$/'
            . '', $this->v->getField()
        ) == 1);
    } 
}

