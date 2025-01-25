<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Projects extends BaseController
{
    public function index()
    {
        return view('projects.php');
    }
    public function codeigniterproject()
    {
        return view('codeigniterproject.php');
    }
}
