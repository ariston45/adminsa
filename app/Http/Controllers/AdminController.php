<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    return view('dashboard');
  }
  public function HomeFunction()
  {
    return view('layout.layout');
  }
}
