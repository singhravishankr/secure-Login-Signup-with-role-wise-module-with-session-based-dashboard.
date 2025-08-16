<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
              
        $session = session();
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $model->where('email', $email)->first();
        //print_r($user);
        //exit();
        if ($user && password_verify($password, $user['password'])) {
            session()->set('isLoggedIn', true);
            $session->set(['user_id' => $user['id'], 'user_name' => $user['first_name'], 'role' => $user['role']]);
            //$role = session()->set('role');

            $role = session()->get('role');
            

                   return redirect()->to('/dashboard');
        }

        return redirect()->back()->with('error', 'Invalid login credentials');
    }


    public function register()
    {
        return view('auth/register');
    }

    public function registerPost()
    {
        helper(['form']);
        $rules = [
            'first_name' => 'required',
            'last_name'  => 'required',
            'dob'  => 'required',
            'email'      => 'required|valid_email|is_unique[users.email]',
            'password'   => 'required|min_length[6]',
            'confirm_password' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return view('auth/register', ['validation' => $this->validator]);
        }

        $model = new UserModel();
        
        $model->save([
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'dob'        => $this->request->getPost('dob'),
            'role'        => $this->request->getPost('role'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        ]);

        return redirect()->to('/login');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
