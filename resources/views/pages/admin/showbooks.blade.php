@extends('inc.adminlayout')

@section('content')

<div class="row">
	<div class="container-fluid">
		<div class="panel panel-primary">
			<div class="panel-heading">
            	Book Details
         	</div>
            <div class="panel-body">
            	<table class="table table table-striped ">
            		<tbody>
            			<tr>
            				<th>Book ISBN</th>
            				<td>{{$book->ISBN}}</td>
            			</tr>
            			<tr>
            				<th>Book Title</th>
            				<td>{{$book->title}}</td>
            			</tr>
                        <tr>
                            <th>Book Author</th>
                            <td>{{$book->author}}</td>
                        </tr>
            			<tr>
            				<th>Book Category</th>
            				<td>{{$book->category}}</td>
            			</tr>
            			<tr>
            				<th>Book Price</th>
            				<td>{{$book->price}}</td>
            			</tr>
					</tbody>
        		</table>  
	  		</div>
            <div class="panel-footer">
                <a href="/books/{{$book->id}}/edit" class="btn btn-outline btn-primary">Edit</a>
                {!!Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' =>'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-outline btn-primary'])}}
                {!!Form::close()!!}
            </div>
	  	</div>
	</div>
</div>
@endsection
