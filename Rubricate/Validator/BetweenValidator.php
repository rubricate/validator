<?php

namespace Rubricate\Validator;

class BetweenValidator implements IIsValidValidator
{
    private $v;

    public function __construct($keyMinAndMaxArr)
    {
        $this->v = new VoValidator();
        $this->v->setRule($keyMinAndMaxArr);
    }

    public function isValid($field)
    {
        $this->v->setField($field);
        $rule = $this->v->getRule();
        self::exception($rule);

        $num = self::getSize();

        return ( ($num >= $rule['min'])  && ($num <= $rule['max']) );
    } 

    private function getSize()
    {
        $v = $this->v->getField();
        return (is_numeric($v)) ?  $v : mb_strlen($v, 'UTF-8');
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

