<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //coustom validation rule.

       // if (mb_strtoupper($value) === mb_strtoupper(""))
       
       if(strtoupper($value)===strtoupper($value)) {
        $fail("the :attribute is not in upprecase");
    
    }
    }
}
