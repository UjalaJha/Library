<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function libuser()
    {
    return view('pages.libuser.index_user');
	}

	public function admin()
    {
    return view('pages.admin.Index_admin');
	}

	public function customlogin()
    {
    return view('pages.customlogin');
	}
    











}
