<?php

namespace Rubricate\Validator;

class MimeTypeValidator implements IIsValidValidator
{
    private $v;

    public function __construct($mimeTypeArr)
    {
        $this->v = new VoValidator();
        $this->v->setRule($mimeTypeArr);
    }

    public function isValid($fileType): bool
    {
        $this->v->setField($fileType);

        return (
            in_array(
                $this->v->getField(), 
                $this->v->getRule()
            )
        );
    }
}

