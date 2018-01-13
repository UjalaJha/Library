<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MembersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('prevent-back-history');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $member = member::orderby('memid','asc')->paginate(4);
        return view('pages.admin.viewmem')->with('member',$member);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.addmembers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate( $request, [
            'id' => 'required',
            'name' =>'required'
        ]);

        $member=new member;
        $member->name=$request->input('name');
        $member->memid=$request->input('id');
        $member->sex=$request->input('sex');
        $member->category=$request->input('select');
        $member->save();
        return redirect('/members')->with('success','Member Added');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "ff";
        $member = member::find($id);
        return view('pages.admin.showmem')->with('member',$member);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = member::find($id);
        return view('pages.admin.editmem')->with('member',$member);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'id' => 'required'
        ]);

        $member=member::find($id);
        $member->name=$request->input('name');
        $member->memid=$request->input('id');
        $member->sex=$request->input('sex');
        $member->category=$request->input('select');
        $member->save();
        return redirect('/members')->with('success','Member Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member=member::find($id);
        if ($member!= null)
        {
           $member->DELETE();
           return redirect('/members')->with('success','Member Removed');
        }
        return redirect('/members')->with('success','Member Removed');
    }
}
