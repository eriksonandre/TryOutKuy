<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $helpers = ['form'];

    public function signup()
    {
        if (! $this->request->is('post')) {
            return view('index');
        }

        $rules = [
            'username'  => 'required|max_length[30]',
            'email'     => 'required|max_length[254]|valid_email',
            'phone'     => 'numeric |max_length[13]',
            'password'  => 'required|max_length[255]|min_length[10]',
            'password2' => 'required|max_length[255]|matches[password]',
        ];

        $data = $this->request->getPost(array_keys($rules));

        if (! $this->validateData($data, $rules)) {
            return view('index');
        }

        $validData = $this->validator->getValidated();

        return view('home');
    }
}
