<?php

namespace App\Rules;

use Illuminate\Support\Str;
use Illuminate\Contracts\Validation\Rule;

class PhoneNumberRule implements Rule
{
    protected $message;

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
        if (!preg_match('/^(((00|\+)?213)|0)[5-7]([ \-\_\/]?[0-9]{2}){4}$/', $value) ) {
            return $this->fail('The phone number is invalid');
        } else {
            return true;
        }
    }
        
    /**
     * Specifies an error message and returns false
     */
    protected function fail($message) 
    {
        $this->message = $message;
        return false;
    }
    
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
