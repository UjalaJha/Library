<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function libuser()
    {
    return view('pages.libuser.index_user');
	}

	public function admin()
    {
    return view('pages.admin.Index_admin');
	}

	public function login()
    {
    return view('pages.login');
	}
    











}
