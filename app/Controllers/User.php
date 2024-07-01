<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate()
    {
        $session = session();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Example: Check if username and password match (you should validate against your database)
        if ($username === 'admin' && $password === 'password') {
            $userData = [
                'username' => $username,
                'isLoggedIn' => true
            ];

            $session->set($userData);

            return redirect()->to('/');
        } else {
            return redirect()->to('/login')->with('error', 'Invalid username or password');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        
        return redirect()->to('/login');
    }
}
