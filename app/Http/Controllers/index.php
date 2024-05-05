<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class index extends Controller
{
    public function index()
    {
        

        return view('welcome');
    }
}
