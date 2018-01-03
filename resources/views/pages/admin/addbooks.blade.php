<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>VESIT LIBRARY</title>
    <link rel="icon" href="{!!('img/logo.ico') !!}"/>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    @include('inc.nav_admin')
    <!-- <div class="wrapper">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-3 col-md-6">
                    {!! Form::open(['method'=>'POST']) !!}
                    <div class="form-group push-to-right" style="right:5px">
                        {{Form::label('title','Title')}}
                        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                        {{Form::label('author','Author')}}
                        {{Form::text('author','',['class'=>'form-control','placeholder'=>'Author'])}}
                        {{Form::label('price','Price')}}
                        {{Form::text('price','',['class'=>'form-control','placeholder'=>'Price'])}}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div> -->

    <div id="wrapper">

    <!-- Navigation -->

    <div id="page-wrapper">
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <h2>Book</h2>
                {!! Form::open(['method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('title','ISBN')}}
                    {{Form::number('title','',['class'=>'form-control','placeholder'=>'Add ISBN'])}}
                </div>
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
                </div>
                <div class="form-group">
                    {{Form::label('title', 'Author')}}
                    {{ Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Add Author']) }}
                </div>
                <div class="form-group">
                    {{Form::label('title', 'Price')}}
                    {{Form::number('title', '', ['class' =>'form-control', 'placeholder' => 'Add Price']) }}
                </div>
                <div class="form-group dropdown">
                    {!! Form::label('select', 'Category', ['class' => ' control-label'] )  !!}<br>
                    {!!  Form::select('select', ['DG' => 'Degree', 'MCA' => 'MCA'], null,['class' => 'form-control dropdown' , 'placeholder' => 'Add Category', 'disablePlaceholder' => true]) !!}

                </div>
                <p></p>
                {{Form::submit('Submit', ['class' =>'btn btn-primary'])}}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
