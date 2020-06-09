<?php


class Spedometer
{

    const RATIO_KM_TO_MILES = 0.621371;

    public static function milesToKms($miles)
    {
        return ($miles * self::RATIO_KM_TO_MILES);
    }


    public static function kmsToMiles($kms)
    {
        return ($kms / self::RATIO_KM_TO_MILES);
    }

}