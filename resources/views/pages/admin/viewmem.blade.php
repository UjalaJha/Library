@extends('inc.adminlayout')

@section('content')
    
<div class="panel panel-primary">
    <div class="panel-heading" >
        <div class="row">
            <div class="col-lg-12">
                Member List
            </div>
        <!-- /.col-lg-12 -->
        </div>
    </div>

    <div class="panel-body">
    <!-- /.row -->
        <div class="container-fluid">
            <div class="row">
                
                <table class="table table-striped">
                    @if(count($member)>0)
                    <thead>
                        <tr>
                            <th>Member Name</th>
                            <th>Member ID</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach($member as $mem)
                        <tr>
                            <td>{!!$mem->name!!}</td>
                            <td>{!!$mem->memid!!}</td>
                            <td><a href ="/members/{{$mem->id}}" <button type="button" class="btn btn-outline btn-primary">View Details</button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    @else
                        No member
                    @endif
                </table> 
            </div>
        <div>
    </div>
</div>
<div class="row text-center">
    {{$member->links()}}
</div>
@endsection
