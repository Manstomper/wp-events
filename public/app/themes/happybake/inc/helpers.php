<?php

/**
 * Wrapper for Polylang string translation
 */
function rig_translate($string)
{
    if (function_exists('pll__')) {
        return pll__($string);
    }

    return $string;
}

/**
 * Wrapper for Polylang function pll_current_language()
 */
function rig_current_language()
{
    return function_exists('pll_current_language') ? pll_current_language() : 'fi';
}
