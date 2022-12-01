<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Menu;


class ProfileController extends Controller
{
	public function IdenUser()
  {
    $id = Auth::user()->id;
    $user = User::where('id',$id)->first();
    return $user;
  }
  public function IdenMenu()
  {
    $menu = Menu::get();
    return $menu;
  }
}
