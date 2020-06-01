<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Entry;

class DashboardController extends Controller
{
	public function index()
	{
		$user_id = auth()->user()->id;

    	$getCount = Entry::where('user_id', $user_id)->count();

    	return view('dashboard', compact('getCount'));
	}
}
