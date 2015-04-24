<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	//Test Page

	public function test()
	{
		$first = 'poop';
		$last = 'Woith';

		return view('pages.test', compact('first', 'last'));
	}

}
