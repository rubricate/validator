<?php

declare(strict_types=1);

namespace Rubricate\Validator;

use DateTime;

class DateValidator implements IIsValidValidator
{
    private $format;

    public function __construct($format = 'Y-m-d')
    {
        $this->format = $format; 
    }

    public function isValid($date): bool
    {
        $d = DateTime::createFromFormat($this->format, (string) $date);
        return (($d) && ($d->format($this->format) == $date));
    } 
}

