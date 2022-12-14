<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Str;
use File;
use Arr;

class ActionController extends Controller
{
	public function storeUdateUser(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'profile_photo' => 'mimes:jpg,png,jpeg|max:512|dimensions:min_width=100,min_height=100,max_width=450,max_height=450',
		],[
			'profile_photo.dimensions' => 'Dimensi gambar profil tidak boleh lebih dari 450*450 piksel dan tidak boleh kurang dari 100*100 piksel.',
			'profile_photo.max' => 'Ukuran berkas gambar tidak boleh lebih dari 512 kilobytes.',
			'profile_photo.mimes' => 'Format berkas hanya boleh .jpg .png .jpeg'
		]);
		if ($validator->fails()) {
			$m = $validator->getMessageBag()->all();
			$mssg = '<div class="alert bg-gradient-warning alert-dismissible mb-0" style="border:0px;">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h5><i class="icon fas fa-exclamation-triangle"></i> Perhatian!</h5>
			<ul style="list-style-type: square;padding-left: 17px;margin-bottom: 0px;">';
			foreach ($m as $key => $value) {
				$mssg .= '<li>'.$value.'</li>';
			}
			$mssg .= '</ul></div>';
			$res = [
				'param' => 0,
				'message' => $mssg
			];
			return $res;
		}else {
			$data = [
				'name' => $request->fullname,
				'username' => $request->username,
				'level' => $request->accesslevel,
				'email' => $request->email,
				'phone' => $request->phone,
				'address' => $request->address,
			];
			$init = User::where('id',$request->init)->first();
			if ($request->param_profile_img == 'CHANGE') {
				$newname_profile_img = 'img_profile_'.Str::random(10).'.'.$request->profile_photo->getClientOriginalExtension();
				$request->file('profile_photo')->move(storage_path('app/public/img_profile/'),$newname_profile_img);
				File::delete(storage_path('app/public/img_profile/'.$init->image));
				$data = Arr::add($data, 'image', $newname_profile_img);
			}elseif($request->param_profile_img == 'REMOVE'){
				File::delete(storage_path('app/public/img_profile/'.$init->image));
				$data = Arr::add($data, 'image', null);
			}
			if ($request->password != null) {
				$data = Arr::add($data, 'password', Hash::make($request->password));
			}
			$action_update = User::where('id',$init->id)->update($data);
			$res = [
				'param' => 1,
				'message' => 'ok'
			];
			return $res;
		}
	}
}

