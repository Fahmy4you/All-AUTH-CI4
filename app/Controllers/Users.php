<?php

namespace App\Controllers;

class Users extends BaseController
{
public function index()
	{
		return view('user/index');
	}
}