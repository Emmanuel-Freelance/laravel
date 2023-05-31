<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function create()
    {
        return view('add');
    }
    public function edit($id)
    {
        return view('edit');
    }
}
