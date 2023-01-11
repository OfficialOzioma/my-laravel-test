<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class AlphaRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // if (!preg_match('/^[\p{L} ]+$/u', $value)) {
        //     $errors[] = "Name must only contain letters!";
        // }
        return (ctype_alpha($value)) ? true : false;
        // return (!preg_match('/^[\p{L} ]+$/u', $value)) ? true : false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must contain only Alphabet.';
    }
}