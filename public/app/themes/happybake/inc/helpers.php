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

/**
 * Gets a named field outside a Block.
 * Recurses into InnerBlocks. However, if multiple fields with the same name are found, a warning will be triggered.
 * Always returns the value. For fields with another Return Format, use rig_get_field_object().
 */
function rig_get_field($fieldName, $p = null)
{
    $postContent = get_post_field('post_content', $p);
    $blocks = parse_blocks($postContent);

    if (empty($blocks[0])) {
        return;
    }

    $values = [];

    $find = function ($blocks, &$values) use (&$find, $fieldName) {
        foreach ($blocks as $b) {
            if (!empty($b['innerBlocks'])) {
                $find($b['innerBlocks'], $values);
            }
            if (isset($b['attrs']['data'][$fieldName])) {
                $values[] = $b['attrs']['data'][$fieldName];
            }
        }
    };

    $find($blocks, $values);

    if (count($values) !== 1) {
        trigger_error('Found multiple fields named "' . $fieldName . '".', E_USER_WARNING);

        return;
    }

    return $values[0];
}

/**
 * Gets a named field outside a Block, checks Return Format
 * Supports types "select", "image", "post_object", "taxonomy" and "relationship"
 */
function rig_get_field_object($fieldKey, $p = null)
{
    if (!function_exists('get_field_object') || !function_exists('acf_get_attachment')) {
        return;
    }

    $obj = get_field_object($fieldKey, $p);
    $value = rig_get_field($obj['name'], $p);
    $format = $obj['return_format'];

    if (!$value) {
        return;
    }

    switch ($obj['type']) {
        case 'select':
            if ($format === 'label') {
                return $obj['choices'][$value] ?? '';
            }
            if ($format === 'array') {
                return [
                    'value' => $value,
                    'label' => $obj['choices'][$value] ?? '',
                ];
            }
            break;
        case 'image':
            if ($format === 'array') {
                return acf_get_attachment((int) $value);
            }
            if ($format === 'url') {
                return wp_get_attachment_url((int) $value);
            }
            break;
        case 'post_object':
            if ($format === 'object') {
                return get_post((int) $value);
            }
            break;
        case 'taxonomy':
            if ($format === 'object') {
                return get_term((int) $value, $obj['taxonomy']);
            }
            break;
        case 'relationship':
            if ($format === 'object') {
                $return = [];
                foreach ($value as $postId) {
                    $return[] = get_post((int) $postId);
                }
                return $return;
            }
            break;
    }

    return $value;
}

/**
 * Find and return CSS class names for custom blocks
 */
function rig_get_block_classes($attributes)
{
    $name = substr($attributes['name'], (strpos($attributes['name'], '/') + 1));
    $classes = ['block-' . $name];

    if (!empty($attributes['align'])) {
        $classes[] = 'align' . $attributes['align'];
    }

    if (!empty($attributes['align_content'])) {
        $positions = array_unique(explode(' ', $attributes['align_content']));
        $classes[] = 'vertical-align-' . implode('-', $positions);
    }

    if (!empty($attributes['className'])) {
        $classes[] = $attributes['className'];
    }

    if (!empty($attributes['backgroundColor'])) {
        $classes[] = 'has-background';
        $classes[] = 'has-' . $attributes['backgroundColor'] . '-background-color';
    }

    return implode(' ', $classes);
}
