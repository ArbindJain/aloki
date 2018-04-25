<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DivisibleBy5 implements Rule
{

    /**
     * Multiplier passed from controller.
     *
     */
    protected $multiplier;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($multiplier)
    {
        $this->multiplier = $multiplier;
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
        return $value % $this->multiplier === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The quantity should be multiple to 5.';
    }
}
