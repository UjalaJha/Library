@extends('pages.admin.adminlayout')
@section('content')

<div class="row">
	<div class="col-lg-12">
		<h1>Member</h1>
	</div>
<!-- /.col-lg-12 -->
</div>
	<!-- /.row -->
<div class="row">
	<div class="container-fluid">
	  	<div class="well well-sm">
			Member Name      - {{$member->name}}<br>
			Member ID        - {{$member->memid}}<br>
			Member Gender    - {{$member->sex}}<br>
			Member Category  - {{$member->category}}<br>
	  	</div>
	</div>
</div>

<a href="/members/{{$member->id}}/edit" class="btn btn-warning">Edit</a>

{!!Form::open(['action' => ['MembersController@destroy', $member->id], 'method' => 'POST', 'class' =>'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection
