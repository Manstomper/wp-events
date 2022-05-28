<?php

/**
 * Comment form default fields
 */
add_filter('comment_form_default_fields', function($fields) {
    unset($fields['url']);

    return $fields;
}, 11, 1);

/**
 * Comment form defaults
 */
add_filter('comment_form_defaults', function($defaults) {
    $defaults['title_reply'] = rig_translate('Ilmoittaudu');
    $defaults['label_submit'] = rig_translate('Lähetä');

    return $defaults;
}, 11, 1);
