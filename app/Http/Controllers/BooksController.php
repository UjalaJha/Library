<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = book::orderby('ISBN','asc')->paginate(4);
        return view('pages.admin.viewbooks')->with('book',$book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.addbooks');
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
            'ISBN' => 'required',
            'title' =>'required'
        ]);

        $book=new book;
        $book->ISBN=$request->input('ISBN');
        $book->title=$request->input('title');
        $book->author=$request->input('author');
        $book->price=$request->input('price');
        $book->category=$request->input('select');
        $book->save();
        return redirect('/books')->with('success','Book Added');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = book::find($id);
        return view('pages.admin.showbooks')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = book::find($id);
        return view('pages.admin.editbooks')->with('book',$book);
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
            'ISBN' => 'required',
            'title' =>'required'
        ]);

        $book=new book;
        $book->ISBN=$request->input('ISBN');
        $book->title=$request->input('title');
        $book->author=$request->input('author');
        $book->price=$request->input('price');
        $book->category=$request->input('select');
        $book->save();
        return redirect('/books')->with('success','Book Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=book::find($id);
        if ($book!= null)
        {
           $book->DELETE();
           return redirect('/books')->with('success','Book Removed');
        }
        return redirect('/books')->with('success','Book Removed');
    }
}
