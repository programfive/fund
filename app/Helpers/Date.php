<?php

namespace App\Helpers;

use Carbon\Carbon;

class Date
{
    public static function calculateAge($value)
    {
        $dateOfBirth = Carbon::createFromFormat('d/m/Y', $value);
        return $dateOfBirth->age;
    }

    public static function dateFormat ($value)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $value)->format('d/m/y');
    }

}