


@extends('inc.adminlayout')

@section('content')

<div class="row">
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Add Member
            </div>
            <div class="panel-body">
                {!! Form::open(['action' => 'MembersController@store','method'=>'POST']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Member Name')}}
                    {{ Form::text('name', '', ['class' =>'form-control', 'placeholder' => 'Add name']) }}
                </div>
                <div class="form-group">
                    {{Form::label('id', 'Member ID')}}
                    {{ Form::number('id', '', ['class' =>'form-control', 'placeholder' => 'Add ID']) }}
                </div>
                <div class="form-group">
                    {{Form::label('sex', 'SEX')}}<br>
                    {{ Form::radio('sex', 'male') }} {{Form::label('title', 'male')}}<br>
                    {{ Form::radio('sex', 'female') }} {{Form::label('title', 'female')}}
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
        {!! Form::submit('Submit', ['class' =>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>

@endsection