
@extends('inc.adminlayout')

@section('content')

<div class="row">
    <div class="container-fluid">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Edit Member
            </div>
            <div class="panel-body">
                {!! Form::open(['action' => ['MembersController@update', $member->id],'method'=>'Member']) !!}
                <div class="form-group">
                    {{Form::label('name', 'Member Name')}}
                    {{ Form::text('name', $member->name, ['class' =>'form-control', 'placeholder' => 'Add name']) }}
                </div>
                <div class="form-group">
                    {{Form::label('id', 'Member ID')}}
                    {{ Form::number('id', $member->memid, ['class' =>'form-control', 'placeholder' => 'Add ID']) }}
                </div>
                <div class="form-group">
                    {{Form::label('sex', 'Gender')}}<br>
                    {{ Form::radio('sex', 'male') }} {{Form::label('title', 'male')}}<br>
                    {{ Form::radio('sex', 'female') }} {{Form::label('title', 'female')}}
                </div>
                <div class="form-group dropdown">
                    {!! Form::label('select', 'Category', ['class' => ' control-label'] )  !!}<br>
                    {!!  Form::select('select', ['DG' => 'Degree', 'MCA' => 'MCA'],  'S', ['class' => 'form-control dropdown' ]) !!}
                </div>
                <p></p>
                
            <div>
        </div>
    </div>
    <div class="panel-footer text-center" >
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit', ['class' =>'btn btn-outline btn-primary'])}}
        {!! Form::close() !!}
    </div>
</div>

@endsection