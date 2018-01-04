@extends('pages.admin.adminlayout')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Edit Member</h1>
    </div>
<!-- /.col-lg-12 -->
</div>
    <!-- /.row -->
<div class="row">
   <div class="col-lg-3 col-md-6">
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
                    {{Form::label('sex', 'SEX')}}<br>
                    {{ Form::radio('sex', 'male') }} {{Form::label('title', 'male')}}<br>
                    {{ Form::radio('sex', 'female') }} {{Form::label('title', 'female')}}
                </div>
                <div class="form-group dropdown">
                    {!! Form::label('select', 'Category', ['class' => ' control-label'] )  !!}<br>
                    {!!  Form::select('select', ['DG' => 'Degree', 'MCA' => 'MCA'],  'S', ['class' => 'form-control dropdown' ]) !!}

                </div>
                <p></p>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}

                {!! Form::close() !!}
            </div>
</div>


@endsection
