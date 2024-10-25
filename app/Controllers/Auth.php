<?php

namespace App\Controllers;

class Auth extends BaseController
{
  public function index()
	{
		return view('auth/login');
	}
	public function registrasi()
	{
		return view('auth/register');
	}
}
