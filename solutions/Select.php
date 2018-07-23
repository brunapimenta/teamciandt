<?php

class Select
{
    public static function create($options, $attributes = [])
    {
        $valueSelected = '';
        if (isset($attributes['value'])) {
            $valueSelected = $attributes['value'];
            unset($attributes['value']);
        }

        $attr = '';
        foreach ($attributes as $name => $value) {
            $attr .= trim($name) . '="' . trim($value) . '"';
        }

        $html = '<select ' . $attr . '>';
        foreach ($options as $value => $text) {
            $selected = '';
            if ($valueSelected == $value) {
                $selected = 'selected="selected"';
            }

            $html .= '<option value="' . trim($value) . '" ' . $selected . '>' . trim($text) . '</option>';
        }
        $html .= '</select>';

        return $html;
    }
}
