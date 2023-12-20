<?php

namespace App\Helpers;

use Illuminate\Support\Facades\App;

class LanguageHelper
{
    public static function get($className, $attributeName, $key = null)
    {
        $key = isset($key) ? $key : App::getLocale();

        return $className[$attributeName . '_' . $key];
    }
}
