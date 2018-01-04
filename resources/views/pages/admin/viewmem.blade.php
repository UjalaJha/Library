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
    @if(count($member)>0)
        <table class="table table-striped">
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
                    <td><a href ="/members/{{$mem->id}}" <button type="button" class="btn btn-info ">View Details</button></a></td>
                </tr>
                @endforeach
                @else
                    No member
                @endif

          </tbody>
        </table> 
</div>
<div class="row text-center">
 {{$member->links()}}
</div>

@endsection
