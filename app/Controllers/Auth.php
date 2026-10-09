<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    // Displays the registration form
    public function register()
    {
        return view('auth/register');
    }

    // Processes registration form submission
    public function storeRegister()
    {
        $rules = [
            'name'                  => 'required|min_length[3]',
            'email'                 => 'required|valid_email|is_unique[users.email]',
            'password'              => 'required|min_length[6]',
            'password_confirmation' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $userModel->insert([
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'password'   => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'       => 'student',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/login')->with('success', 'Registration successful. You may now log in.');
    }

    // Displays the login form
    public function login()
    {
        return view('auth/login');
    }

    // Processes login form submission
    public function authenticate()
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
        }

        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->regenerate();
            session()->set([
                'user_id'    => $user['id'],
                'user_name'  => $user['name'],
                'user_email' => $user['email'],
                'user_role'  => $user['role'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/dashboard')->with('success', 'Welcome back!');
        }

        return redirect()->back()->withInput()->with('error', 'Invalid email or password.');
    }

    // Protected page - only logged-in users can see it
    public function dashboard()
    {
        if (! session()->get('isLoggedIn')) {
            return redirect()->to('/login')->with('error', 'Please log in first.');
        }

        return view('auth/dashboard');
    }

    // Destroys the session and redirects to login
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }
}