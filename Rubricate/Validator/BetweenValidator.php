<?php

declare(strict_types=1);

namespace Rubricate\Validator;

class BetweenValidator implements IIsValidValidator
{
    private $v, $encoding;

    public function __construct($keyMinAndMaxArr, $encoding = 'UTF-8')
    {
        $this->v = new VoValidator();
        $this->v->setRule($keyMinAndMaxArr);
        $this->encoding = $encoding;
    }

    public function isValid($field): bool
    {
        $this->v->setField($field);
        $rule = $this->v->getRule();
        self::exception($rule);

        $num = self::getSize();

        return ( ($num >= $rule['min']) && ($num <= $rule['max']) );
    } 

    private function getSize()
    {
        $v = $this->v->getField();

        if(is_string($v)){

            $i = (function_exists('mb_get_info'));
            $s = ($i)? mb_strlen($v, $this->encoding): strlen($v);

            return $s;
        }

        return $v;
    } 

    private function exception($rule)
    {
        $e = 'class %s: the key "%s" not found.';

        foreach (['max', 'min'] as $m) {
            if(!array_key_exists($m, $rule)) {
                throw new \Exception(sprintf($e, __CLASS__, $m));
            }
        }
    } 
}

