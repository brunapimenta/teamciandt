<?php

class Form
{
    const _DIR = './solutions/data/';
    const _FILE = 'registros.txt';

    public function save($data = [])
    {
        if ((!isset($data['nome']) || trim($data['nome']) === '') || (!isset($data['sobrenome']) || trim($data['sobrenome']) === '') ||
            (!isset($data['email']) || trim($data['email']) === '') || (!isset($data['telefone']) || trim($data['telefone']) === '') ||
            (!isset($data['login']) || trim($data['login']) === '') || (!isset($data['senha']) || trim($data['senha']) === '')) {
            return ['success' => false, 'invalid_field' => 'all', 'all' => 'Este campo é obrigatório.'];
        }

        if (preg_match("/(\(?\d{2}\)?)?9?\d{4}-?\d{4}/", $data['telefone']) === false) {
            return ['success' => false, 'invalid_field' => 'telefone', 'invalid_message' => 'O telefone informado é invalido.'];
        }

        if (filter_var($data['email'], FILTER_VALIDATE_EMAIL) === false) {
            return ['success' => false, 'invalid_field' => 'email', 'invalid_message' => 'O e-mail informado é invalido.'];
        }

        $records = $this->getData();

        if ($this->getDataBy($records, $data['email'], 'email') !== false) {
            return ['success' => false, 'invalid_field' => 'email', 'invalid_message' => 'O e-mail informado já existe.'];
        }

        if ($this->getDataBy($records, $data['login'], 'login') !== false) {
            return ['success' => false, 'invalid_field' => 'login', 'invalid_message' => 'O login informado já existe.'];
        }

        $id = (count($records) > 0 ? count($records) - 1 : 1);
        $record = $this->setUser($id, $data);
        $records[$id] = $record;

        $this->saveFile($records);

        return ['success' => true, 'invalid_field' => '', 'invalid_message' => ''];
    }

    private function getData()
    {
        $this->checkFile();

        $str = file_get_contents(self::_DIR . self::_FILE, FILE_USE_INCLUDE_PATH);
        if ($str === false || $str === null || trim($str) === '') {
            return [];
        }

        return unserialize($str);
    }

    private function getDataBy($records, $value, $field)
    {
        $record = false;

        foreach ($records as $data) {
            if (trim($value) === trim($data[$field])) {
                $record = $data;
                break;
            }
        }

        return $record;
    }

    private function setUser($id, $data)
    {
        return [
            'id' => (int) $id,
            'nome' => trim($data['nome']),
            'sobrenome' => trim($data['sobrenome']),
            'email' => trim($data['email']),
            'telefone' => trim($data['telefone']),
            'login' => trim($data['login']),
            'senha' => crypt(trim($data['senha']), 'rl'),
        ];
    }

    private function checkFile()
    {
        if (!is_dir(self::_DIR)) {
            mkdir(self::_DIR);
        }

        if (!file_exists(self::_DIR . self::_FILE)) {
            $file = fopen(self::_DIR . self::_FILE, "w");
            fclose($file);
        }
    }

    private function saveFile($data)
    {
        $this->checkFile();
        $data = serialize($data);
        file_put_contents(self::_DIR . self::_FILE, $data);
    }
}
