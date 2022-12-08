<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
	# <===========================================================================================================================================================>
	#user #view_user
	public function UserDataView()
	{
		return view('contents.content_i.user_set_view');
	}
	public function viewUserDataDetail(Request $request)
	{
		return view('contents.content_i.user_set_detail_view');
	}
}
