@extends('inc.adminlayout')
@section('content')
<div class="panel panel-primary">
    <div class="panel-heading" >
        <div class="row">
            <div class="col-lg-12">
                Book List
            </div>
        <!-- /.col-lg-12 -->
        </div>
    </div>

    <div class="panel-body">
    <!-- /.row -->
        <div class="container-fluid">
            <div class="row">
                
                <table class="table table-striped">
                    @if(count($book)>0)
                    <thead>
                        <tr>
                            <th>Book ISBN</th>
                            <th>Book Title</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($book as $bk)
                        <tr>
                            <td>{!!$bk->ISBN!!}</td>
                            <td>{!!$bk->title!!}</td>
                            <td><a href ="/books/{{$bk->id}}" 
                                <button type="button" class="btn btn-outline btn-primary">View Details
                                </button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                        No Book
                    @endif
                </table> 
            </div>
        <div>
    </div>
</div>
<div class="row text-center">
    {{$book->links()}}
</div>
@endsection
