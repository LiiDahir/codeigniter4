<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index(): string
    {
        return view('pages/login');
    }

    public function authenticate() {
        $response = [
            'success' => false,
            'message' => ''
        ];
    
        if (isset($_POST['email-username']) && isset($_POST['password'])) {
            $username = trim($_POST['email-username']);
            $password = trim($_POST['password']);
            
            // Example hashed credentials for demonstration purposes
            $validUsername = 'admin';
            $hashedPassword = password_hash('admin', PASSWORD_DEFAULT);
    
            // Check if the provided username matches the valid one
            if ($username === $validUsername && password_verify($password, $hashedPassword)) {
                $response['success'] = true;
                $response['message'] = 'Authentication successful!';
                // Redirect to dashboard
                header("Location: " . base_url('dashboard/index'));
                exit(); // Ensure no further code is executed after redirection
            } else {
                $response['message'] = 'Invalid username or password.';
            }
        } else {
            $response['message'] = 'Please provide both username and password.';
        }
    
        // Set Content-Type to application/json
        header('Content-Type: application/json');
        echo json_encode($response);
    }
    


    public function signup(){
        return view('pages/register');
    }
    public function forget(){
        return view('pages/forget');
    }
}
