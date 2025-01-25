<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Contact extends BaseController
{
    public function index()
    {
        return view('contact.php');
    }
}
