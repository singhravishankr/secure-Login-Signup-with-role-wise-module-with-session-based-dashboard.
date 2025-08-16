<?php

namespace App\Controllers;

use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        if (!session()->get('user_id')) {
            return redirect()->to('/login');
        }

        //$model = new UserModel();
        //$data['users'] = $model->findAll();

        $model = new \App\Models\UserModel();
    $role = session()->get('role');
    $userId = session()->get('user_id');

    if ($role === 'Admin') {
        // Admin gets all users
        $data['users'] = $model->findAll();
    } else {
        // Regular user gets only their own record
        $data['users'] = [$model->find($userId)];
    }


        return view('dashboard/index', $data);
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        return view('dashboard/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();
        
       
        $model->update($id, [
            'first_name' => $this->request->getPost('first_name'),
            'last_name'  => $this->request->getPost('last_name'),
            'email'      => $this->request->getPost('email'),
            'dob'        => $this->request->getPost('dob'),
            'role'       => $this->request->getPost('role'),
        ]);
      
//print_r($model);
//exit();
        return redirect()->to('/dashboard');
    }

    public function delete($id)
    {
       
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/dashboard');
    }
}
