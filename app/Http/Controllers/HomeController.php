<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function homeFunction(Request $request)
	{
		return view('contents.content_i.home');
	}
}
