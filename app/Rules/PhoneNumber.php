<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\ValidationRule;

class PhoneNumber implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $value =  preg_replace("/[^0-9]/m", null, $value);

        return   strlen($value)==12;
    }
    public function message( ): string
    {
        return 'Telefon raqamni to`g`ri kiriting';
    }
}
