<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = ['0'=>['name' => 'Povilas']];
        return view('users.index', compact('users'));
    }

    public function create()
    {
        
    }

    public function store()
    {

        
    }
}
