<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
		$auth = Auth::user();
		$init_user = User::where('id',$auth->id)->first();
		return view('contents.content_i.user_set_detail_view',compact('init_user'));
	}
}
