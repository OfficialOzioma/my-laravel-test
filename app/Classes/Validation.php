<?php

namespace App\Classes;

use App\Rules\AlphaRule;
use App\Rules\EmailRule;
use App\Rules\NumberRule;
use App\Rules\RequiredRule;

class Validation
{
    public $RequiredRule;
    public $AlphaRule;
    public $EmailRule;
    public $NumberRule;

    public function __construct()
    {
        $this->RequiredRule = new RequiredRule();
        $this->AlphaRule = new AlphaRule();
        $this->EmailRule = new EmailRule();
        $this->NumberRule = new NumberRule();
    }

    public function validate($rules)
    {
        $getRules =  explode('|', $rules);
        $validationError = [];

        foreach ($getRules as $rule) {
            $validationError[]  = $this->rule($rule);
        }

        return $validationError;
    }

    protected function rule($rule)
    {
        switch ($rule) {
            case 'alpha':
                return $this->AlphaRule;
                break;
            case 'email':
                return $this->EmailRule;
                break;
            case 'number':
                return $this->NumberRule;
                break;
            case 'required':
                return $this->RequiredRule;
                break;
            default:
                return "This rule Does not exits";
                break;
        }
    }
}