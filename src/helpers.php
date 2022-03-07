<?php

use WovoSchool\Money\Currency;
use WovoSchool\Money\Money;

if (!function_exists('money')) {
    /**
     * Instance of money class.
     *
     * @param mixed  $amount
     * @param string $currency
     * @param bool   $convert
     *
     * @return \WovoSchool\Money\Money
     */
    function money($amount, $currency = null, $convert = false)
    {
        if (is_null($currency)) {
            $currency = env('DEFAULT_CURRENCY', 'USD');
        }

        return new Money($amount, currency($currency), $convert);
    }
}

if (!function_exists('currency')) {
    /**
     * Instance of currency class.
     *
     * @param string $currency
     *
     * @return \WovoSchool\Money\Currency
     */
    function currency($currency)
    {
        return new Currency($currency);
    }
}
