<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;

class AccountController extends Controller {

	// My Account

	public function users()
	{
		//return 'My Account';
		$users = User::latest('username')->get();
		return view('account.users', compact('users'));
	}

	public function myaccount($username)
	{
		//return $username;
		$user = User::where('username', $username)->first();
		return view('account.myaccount', compact('user'));
	}

	public function newaccount()
	{
		//return 'My Account';
		//$users = User::all();
		return view('account.newaccount');
	}

	public function storeuser(Requests\NewUser $request)
	{
		$redirect = 'my-account/'.Request::get('username');

		User::create(Request::all());


		return redirect($redirect);
	}
}