@extends('inc.adminlayout')
@section('content')
    <!-- /.col-lg-12 -->
<!-- <div class="row">
    <div class="col-lg-12">
        <h1>Dashboard</h1>
    </div>
</div> -->
    <!-- /.row -->
@if(Auth::guest())
@section('content')
<div class="container-fluid">
<div class="alert alert-danger alert-dismissable" style="margin: 8px padding: 9px">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p class="text-center">You are logged out!</p>
</div>


 <h1><p class="text-center">Please Login to visit the page </p></h1>
</div>
@endsection

@else
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h1>Dashboard</h1></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" style="padding-left: 15px">
   <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-book fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Reissue Requests</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments-o fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Queries</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Overdue List</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
@endif
