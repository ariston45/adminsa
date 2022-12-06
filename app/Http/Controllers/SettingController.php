<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
	public function UserDataView()
	{
		return view('contents.content_i.user_set_view');
	}
}
