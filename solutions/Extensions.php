<?php

function getFilesExtensions($files) {
    if (empty($files)) {
        return [];
    }

    $files = array_column($files, 'name')[0];

    $extensions = [];
    foreach ($files as $fileName) {
        if (trim($fileName) !== '') {
            $extensions[] = pathinfo($fileName, PATHINFO_EXTENSION);
        }
    }

    return $extensions;
}
