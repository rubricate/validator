<?php

declare(strict_types=1);

namespace Rubricate\Validator;

class EmailValidator implements IIsValidValidator
{
    private $v;

    public function __construct()
    {
        $this->v = new VoValidator();
    }

    public function isValid($field): bool
    {
        $this->v->setField($field);

        $f      = $this->v->getField();
        $filter = filter_var($f, FILTER_VALIDATE_EMAIL);

        return (($filter) == true);
    } 
}

