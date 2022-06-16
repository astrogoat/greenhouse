<?php

namespace Astrogoat\Greenhouse\Settings;

use Helix\Lego\Settings\AppSettings;
use Astrogoat\Greenhouse\Actions\GreenhouseAction;
use Illuminate\Validation\Rule;

class GreenhouseSettings extends AppSettings
{
     public string $business;

    public function rules(): array
    {
        return [
             'business' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Greenhouse.';
    }

    public static function group(): string
    {
        return 'greenhouse';
    }
}
