<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class About extends BaseController
{
    public function index()
    {
        return view('about.php');
    }
}
