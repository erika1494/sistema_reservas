<?php

namespace Reservas\Http\Controllers;

use Illuminate\Http\Request;

use Reservas\Http\Requests;
use Reservas\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function login()
    {
    	return view('login');
    }

    public function admin()
    {
    	return view('admin');
    }
}
