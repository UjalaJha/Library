<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function user()
    {
    return view('pages.user.index_user');
	}

	public function admin()
    {
    return view('pages.admin.index_admin');
	}

	public function login()
    {
    return view('pages.login');
	}

}
