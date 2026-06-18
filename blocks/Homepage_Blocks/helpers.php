<?php
if (!function_exists('vivara_block_value')) {
    function vivara_block_value($array, $key, $default = '')
    {
        return isset($array[$key]) && $array[$key] !== '' ? $array[$key] : $default;
    }
}

if (!function_exists('vivara_block_multiline')) {
    function vivara_block_multiline($value)
    {
        return wp_kses_post(nl2br(esc_html($value)));
    }
}

if (!function_exists('vivara_block_svg')) {
    function vivara_block_svg($svg)
    {
        $allowed_tags = array(
            'svg' => array(
                'class' => true,
                'viewBox' => true,
                'fill' => true,
                'stroke' => true,
                'stroke-width' => true,
                'xmlns' => true,
                'aria-hidden' => true,
                'role' => true,
            ),
            'path' => array(
                'd' => true,
                'fill' => true,
                'stroke' => true,
                'stroke-width' => true,
                'stroke-linecap' => true,
                'stroke-linejoin' => true,
            ),
            'circle' => array(
                'cx' => true,
                'cy' => true,
                'r' => true,
                'fill' => true,
                'stroke' => true,
                'stroke-width' => true,
            ),
            'rect' => array(
                'x' => true,
                'y' => true,
                'width' => true,
                'height' => true,
                'rx' => true,
                'ry' => true,
                'fill' => true,
                'stroke' => true,
                'stroke-width' => true,
            ),
            'line' => array(
                'x1' => true,
                'y1' => true,
                'x2' => true,
                'y2' => true,
                'stroke' => true,
                'stroke-width' => true,
                'stroke-linecap' => true,
            ),
        );

        return wp_kses($svg, $allowed_tags);
    }
}

if (!function_exists('vivara_block_reveal_class')) {
    function vivara_block_reveal_class($index = 0, $base = 'reveal')
    {
        if ($index <= 0) {
            return $base;
        }

        return trim($base . ' reveal-delay-' . min($index, 5));
    }
}
