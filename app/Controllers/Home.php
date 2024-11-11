<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function homepage(): string
    {
        return view('inputData');
    }

    public function displayName(){

        $validation = \Config\Services::validation();

        // Set validation rules
        $validation->setRules([
            'studentID' => 'required|alpha_numeric|max_length[10]',
            'firstName' => 'required|alpha_space|max_length[50]',
            'lastName' => 'required|alpha_space|max_length[50]',
            'address' => 'required|string|max_length[100]',
            'birthday' => 'required|valid_date[Y-m-d]',
            'gender' => 'required|in_list[Male,Female,Prefer not to say]',
            'mobilePhone' => 'required|numeric|max_length[15]',
            'email' => 'required|valid_email',
            'status' => 'required|in_list[Single,Married,Widowed,Separated]'
        ]);

        // Check if validation passes
        if (!$this->validate($validation->getRules())) {
            // If validation fails, redirect back with errors
            return redirect()->to(base_url('/homepage'))->withInput()->with('errors', $validation->getErrors());
        }
        else{
            $data = [
                'studentID' => $this->request->getGet('studentID'),
                'firstName' => $this->request->getGet('firstName'),
                'lastName' => $this->request->getGet('lastName'),
                'address' => $this->request->getGet('address'),
                'birthday' => $this->request->getGet('birthday'),
                'gender' => $this->request->getGet('gender'),
                'mobilePhone' => $this->request->getGet('mobilePhone'),
                'email' => $this->request->getGet('email'),
                'status' => $this->request->getGet('status'),
            ];
    
            // Load view with the validated data
            return view('outputData', $data);
        }
    }
}
