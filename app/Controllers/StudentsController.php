<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class StudentsController extends BaseController
{
    public function index()
    {
        return view('students/list');
    }
    public function create()
    {
        return view('students/add');
    }  
    public function edit($id)
    {
        return view('students/add');
    } 
    public function update($id)
    {
        return view('students/add');
    } 
    public function store()
    {
    }  
    public function delete($id)
    {
    }

}
