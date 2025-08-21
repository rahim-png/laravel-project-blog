<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class fisup implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //This is the balidation rule for checking the form first letter is capital one not.
        if($value !=ucfirst($value)) {
            $fail("The :attribute start latter must be upper");
        }
        
    }
    
}
