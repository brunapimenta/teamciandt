<?php

class Countries
{
    public static function list()
    {
        $location = [
            ['country' => 'Estados Unidos da América', 'capital' => 'Washington'],
            ['country' => 'Brasil', 'capital' => 'Brasília'],
            ['country' => 'México', 'capital' => 'Cidade do México'],
            ['country' => 'Havaí', 'capital' => 'Honolulu'],
            ['country' => 'Espanha', 'capital' => 'Madrid'],
            ['country' => 'Alemanha', 'capital' => 'Berlim'],
        ];

        usort($location, function($a, $b) {
            return strcmp($a['capital'], $b['capital']);
        });

        $content = [];
        foreach ($location as $data) {
            $preposition = 'do';
            if (preg_match("/(?:[s])$/i", strtok($data['country'], " "))) {
                $preposition = 'dos';
            }

            if (preg_match("/(?:[a])$/i", strtok($data['country'], " "))) {
                $preposition = 'da';
            }

            if (preg_match("/(?:[a][s])$/i", strtok($data['country'], " "))) {
                $preposition = 'das';
            }

            $content[] = "A capital {$preposition} <strong>{$data['country']}</strong> é <strong>{$data['capital']}</strong>";
        }

        return implode(';<br>', $content) . '.';
    }
}
