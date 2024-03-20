<?php

namespace Rubricate\Validator;

use DateTime;

class DateValidator implements IIsValidValidator
{
    private $format;

    public function __construct($format = 'Y-m-d')
    {
        $this->format = $format; 
    }

    public function isValid($date)
    {
        $d = DateTime::createFromFormat($this->format, $date);
        return (($d) && ($d->format($this->format) == $date));
    } 
}

