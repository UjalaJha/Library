@extends('inc.adminlayout')
@section('content')
<div class="row">
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Book
            </div>
            <div class="panel-body">
                {!! Form::open(['action' => ['BooksController@update',$book->id],'method'=>'POST']) !!}
                <div class="form-group">
                    {{Form::label('ISBN','ISBN')}}
                    {{Form::number('ISBN',$book->ISBN,['class'=>'form-control','placeholder'=>'Add ISBN'])}}
                </div>
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title',$book->title,['class'=>'form-control','placeholder'=>'Add Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('author', 'Author')}}
                    {{ Form::text('author', $book->author, ['class' =>'form-control', 'placeholder' => 'Add Author']) }}
                </div>
                <div class="form-group">
                    {{Form::label('price', 'Price')}}
                    {{Form::number('price', $book->price, ['class' =>'form-control', 'placeholder' => 'Add Price']) }}
                </div>
                <div class="form-group dropdown">
                    {!! Form::label('select', 'Category', ['class' => ' control-label'] )  !!}<br>
                    {!!  Form::select('select', ['DG' => 'Degree', 'MCA' => 'MCA'],  'S',
                     ['class' => 'form-control dropdown' ]) !!}
                </div>
                <p></p>
            <div>
        </div>
    </div>
    <div class="panel-footer text-center">
        {{Form::hidden('_method','PUT')}}
        {!! Form::submit('Submit', ['class' =>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection