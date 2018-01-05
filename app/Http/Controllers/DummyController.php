<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyController extends Controller
{
    public function blank()
    {
        return view('pages.dummy.blank');
    }
     public function buttons()
    {
        return view('pages.dummy.buttons');
    }
     public function flot()
    {
        return view('pages.dummy.flot');
    }
     public function forms()
    {
        return view('pages.dummy.forms');
    }
     public function grid()
    {
        return view('pages.dummy.grid');
    }
     public function icons()
    {
        return view('pages.dummy.icons');
    }
     public function index()
    {
        return view('pages.dummy.index');
    }
     public function loginsb()
    {
        return view('pages.dummy.loginsb');
    }
     public function morris()
    {
        return view('pages.dummy.morris');
    }
     public function notifications()
    {
        return view('pages.dummy.notifications');
    }
     public function panelswells()
    {
        return view('pages.dummy.panels-wells');
    }
     public function tables()
    {
        return view('pages.dummy.tables');
    }
    public function dummy()
    {
        return view('pages.dummy.blank');
    }
    public function typography()
    {
         return view('pages.dummy.typography');
    }

}
