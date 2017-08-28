<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
	public function index(){

		return view('home.index');
	}
	public function UpdateAvatar(Request $request){
		if($request->hasFile('avatar')){
			$avatar = $request->file('avatar');
			$avatar_name = $avatar->getClientOriginalName('avatar');
			$avatar_ext = $avatar->getClientMimeType('avatar');
			$array_ext = ['PNG', 'JPG'];
			if(in_array($avatar_ext, $array_ext)){
				$avatar->move('dir', $avatar_name);
			}
			else{

			}
		}
		else{

		}
	}

	public function getJson(){
		$arrayName = array('a' => 121);
		return response()->json($arrayName);
	}
}
