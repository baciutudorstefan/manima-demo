// In app/Rules/Recaptcha.php

namespace App\Rules;

use ReCaptcha\ReCaptcha;
use Illuminate\Contracts\Validation\Rule;

class Recaptcha implements Rule
{
public function validate($attribute, $value)
{
$recaptcha = new ReCaptcha(config('app.recaptcha_secret_key'));
$response = $recaptcha->verify($value);

return $response->isSuccess();
}
}