<?php

namespace NotificationChannels\Bandwidth\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneNumberRule implements Rule
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
     * @source https://stackoverflow.com/questions/6478875/regular-expression-matching-e-164-formatted-phone-numbers
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^\+?[1-9]\d{1,14}$/', (string)$value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must follow the E.164 number format.';
    }
}
