<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    function __construct()
{
    helper('form');
}

public function login()
{
    if ($this->request->getPost()) {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $dataUser = [['username' => 'Rori', 'password' => 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'role' => 'admin'],
          ['username' => 'Deni', 'password' => 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 'role' => 'User'] // passw 123
    ];
        $isAuthenticated = false;

foreach ($dataUser as $user) {
    if ($username == $user['username'] && hash('sha256', $password) == $user['password']) {
        session()->set([
            'username'   => $user['username'],
            'role'       => $user['role'],
            'isLoggedIn' => TRUE
        ]);
        $isAuthenticated = true;
        break;
    }
}

if ($isAuthenticated) {
    return redirect()->to(base_url('/'));
} else {
    session()->setFlashdata('failed', 'Username & Password Salah');
    return redirect()->back();
}

    } else {
        return view('v_login');
    }
}

public function logout()
{
    session()->destroy();
    return redirect()->to('login');
}
}