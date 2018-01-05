@extends('inc.adminlayout')

@section('content')
<!-- 		
<div class="row">
	<div class="col-lg-12">
		<h1>Member</h1>
	</div> -->
<!-- /.col-lg-12 -->
<!-- </div> -->
	<!-- /.row -->
<div class="row">
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
            	Member Details
         	</div>
            <div class="panel-body">
            	<table class="table table table-striped ">
            		<tbody>
            			<tr>
            				<th>Member Name</th>
            				<td>{{$member->name}}</td>
            			</tr>
            			<tr>
            				<th>Member ID</th>
            				<td>{{$member->memid}}</td>
            			</tr>
            			<tr>
            				<th>Member Gender</th>
            				<td>{{$member->sex}}</td>
            			</tr>
            			<tr>
            				<th>Member Category</th>
            				<td>{{$member->category}}</td>
            			</tr>
					</tbody>
        		</table>  
	  		</div>
	  		<div class="panel-footer">
                <a href="/members/{{$member->id}}/edit" class="btn btn-outline btn-primary">Edit</a>
               	{!!Form::open(['action' => ['MembersController@destroy', $member->id], 'method' => 'POST', 'class' =>'pull-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-outline btn-primary'])}}
				{!!Form::close()!!}
            </div>
	  	</div>
	</div>
</div>

@endsection
