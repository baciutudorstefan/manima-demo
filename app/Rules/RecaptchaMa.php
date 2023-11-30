<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use ReCaptcha\ReCaptcha;

class RecaptchaMa implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        \Log::info('reCAPTCHA secret key: ' . config('app.RECAPTCHA_SECRET_KEY'));

        // Use the secret key for verification
        $secretKey = config('app.RECAPTCHA_SECRET_KEY');
        $recaptcha = new ReCaptcha($secretKey);
        $response = $recaptcha->verify($value);

        if ($response->isSuccess()) {
            // Log a success message
            \Log::info('reCAPTCHA verification successful');
        } else {
            // Log an error message
            \Log::error('reCAPTCHA verification failed: ' . json_encode($response));
        }

        return $response->isSuccess();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute field must be a valid reCAPTCHA response.';
    }
}