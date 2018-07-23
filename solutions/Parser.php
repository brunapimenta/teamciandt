<?php

class Parser
{
    const _DIR = './solutions/data/';

    public function convert($file)
    {
        if ($file['type'] !== 'text/xml') {
            return ['success' => false, 'message' => 'O arquivo precisa ser do tipo XML.'];
        }

        if (file_exists($file['tmp_name'])) {
            if (!is_dir(self::_DIR)) {
                mkdir(self::_DIR);
            }

            $xml = simplexml_load_file($file['tmp_name']);

            if ($xml === false) {
                return ['success' => false, 'message' => 'Ocorreu um erro ao converter o arquivo. Por favor, tente novamente.'];
            }

            $fileConvertedName = str_replace('xml', 'csv', $file['name']);
            $fileConvertedPath = self::_DIR . $fileConvertedName;

            if (file_exists($fileConvertedPath)) {
                unlink($fileConvertedPath);
            }

            $csv = fopen($fileConvertedPath, 'w');
            $this->convertXmlToCsv($xml, $csv);
            fclose($csv);

            return ['success' => true, 'message' => 'O arquivo foi convertido corretamente. <a href="' . $fileConvertedPath . '" download="' . $fileConvertedName . '" class="alert-link">Clique aqui</a> para baixar o arquivo convertido.'];
        }
    }

    private function convertXmlToCsv($xml, $csv)
    {
        foreach ($xml->children() as $item) {
            $hasChild = (count($item->children()) > 0);

            if (!$hasChild) {
                fputcsv($csv, [$item->getName(), $item], ',', '"');
            } else {
                $this->convertXmlToCsv($item, $csv);
            }
        }
    }
}
