<?php

/**
 * Register string for translation
 */
if (function_exists('pll_register_string')) {
    $strings = [
        'submit_form' => 'Submit',
        'search_label' => 'Enter search terms',
        'search_placeholder' => 'Search',
        '404_title' => 'Page not found',
        '404_content' => 'The page you were looking for was not found.',
    ];

    foreach ($strings as $name => $string) {
        pll_register_string($name, $string, 'Theme');
    }
}
