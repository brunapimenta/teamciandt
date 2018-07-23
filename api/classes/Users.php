<?php
namespace Api\Classes;

use Phalcon\Http\Response;
use Phalcon\Http\Request;
use Exception;

class Users
{
    const _DIR = './data/';
    const _FILE = 'users.txt';

    public function all()
    {
        $users = $this->getUsers();

        $response = new Response();
        $response->setStatusCode(200, "OK")
            ->sendHeaders()
            ->setJsonContent($users);

        return $response;
    }

    public function create()
    {
        $response = new Response();

        try {
            $request = new Request();

            if ($request->hasPost('nome') === false || $request->hasPost('sobrenome') === false ||
                $request->hasPost('email') === false || $request->hasPost('telefone') === false) {
                throw new Exception("Bad Request", 400);
            }

            if ($request->getPost('nome') === '' || $request->getPost('sobrenome') === '' ||
                $request->getPost('email') === '' || $request->getPost('telefone') === '') {
                throw new Exception("Bad Request", 400);
            }

            $users = $this->getUsers();

            if ($this->getUserByEmail($users, $request->getPost('email')) !== false) {
                throw new Exception("User email already exists", 400);
            }

            $id = count($users) + 1;
            $user = $this->setUser($id, $request->getPost());
            $users[$id] = $user;

            $this->saveFile($users);

            $response->setStatusCode(200, "OK")
                ->sendHeaders()
                ->setJsonContent($user);
        } catch (Exception $e) {
            $response->setStatusCode($e->getCode(), $e->getMessage())->sendHeaders();
        }
        return $response;
    }

    public function update($id)
    {
        $response = new Response();

        try {
            if (trim($id) === '') {
                throw new Exception("Bad Request", 400);
            }

            $request = new Request();

            $users = $this->getUsers();

            $user = $users[$id];
            if (empty($user)) {
                throw new Exception("User not found", 400);
            }

            if ($this->getUserByEmail($users, $request->getPut('email'), $id) !== false) {
                throw new Exception("User email already exists", 400);
            }

            $user = $this->setUser($id, $request->getPut(), $user);
            $users[$id] = $user;

            $this->saveFile($users);

            $response->setStatusCode(200, "OK")
                ->sendHeaders()
                ->setJsonContent($user);
        } catch (Exception $e) {
            $response->setStatusCode($e->getCode(), $e->getMessage())->sendHeaders();
        }
        return $response;
    }

    public function delete($email)
    {
        $response = new Response();

        try {
            if (trim($email) === '') {
                throw new Exception("Bad Request", 400);
            }

            $users = $this->getUsers();

            $user = $this->getUserByEmail($users, $email);

            if ($user === false) {
                throw new Exception("User not found", 404);
            }

            unset($users[$user['id']]);
            $this->saveFile($users);

            $response->setStatusCode(200, "OK")->sendHeaders();
        } catch (Exception $e) {
            $response->setStatusCode($e->getCode(), $e->getMessage())->sendHeaders();
        }

        return $response;
    }

    private function getUsers()
    {
        $this->checkFile();

        $str = file_get_contents(self::_DIR . self::_FILE, FILE_USE_INCLUDE_PATH);
        if ($str === false || $str === null || trim($str) === '') {
            return [];
        }

        return unserialize($str);
    }

    private function getUserByEmail($users, $email, $id = null)
    {
        $user = false;

        foreach ($users as $data) {
            if (trim($email) === trim($data['email'])) {
                if ($id !== null && (int) $id === (int) $data['id']) {
                    continue;
                }

                $user = $data;
                break;
            }
        }

        return $user;
    }

    private function setUser($id, $data = array(), $user = array())
    {
        $user['id'] = (int) $id;

        if (isset($data['nome']) && trim($data['nome']) != '') {
            $user['nome'] = trim($data['nome']);
        }

        if (isset($data['sobrenome']) && trim($data['sobrenome']) != '') {
            $user['sobrenome'] = trim($data['sobrenome']);
        }

        if (isset($data['email']) && trim($data['email']) != '') {
            $user['email'] = trim($data['email']);
        }

        if (isset($data['telefone']) && trim($data['telefone']) != '') {
            $user['telefone'] = trim($data['telefone']);
        }

        return $user;
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

    private function saveFile($users)
    {
        $this->checkFile();
        $users = serialize($users);
        file_put_contents(self::_DIR . self::_FILE, $users);
    }
}
