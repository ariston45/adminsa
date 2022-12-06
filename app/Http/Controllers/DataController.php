<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DataTables;

class DataController extends Controller
{
  public function sourceDataUser(Request $request)
	{
		$colect_data = User::all();
		return DataTables::of($colect_data)
		->addIndexColumn()
		->addColumn('empty_str', function ($k) {
			return '';
		})
		->addColumn('menu', function ($colect_data) {
			return ' <div class="btn-group">
			<button type="button" class="btn btn-xs btn-flat bg-gradient-primary text-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
			<div class="dropdown-menu dropdown-menu-right">
				<button class="dropdown-item" type="button">Action</button>
				<button class="dropdown-item" type="button">Another action</button>
				<button class="dropdown-item" type="button">Something else here</button>
			</div></div>';
		})
		->addColumn('name', function ($colect_data) {
			return $colect_data->name;
		})
		->addColumn('username', function ($colect_data) {
			return $colect_data->username;
		})
		->addColumn('email', function ($colect_data) {
			return $colect_data->email;
		})
		->rawColumns(['name', 'username', 'email','menu'])
		->make(true);
	}
}
